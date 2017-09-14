<?php

namespace hollanbo\LaravelPoeditor;

class PoeditorRepository {
    public $config;

    public $comment_types = [
        "#" => "translator_comments",
        "#." => "extracted_comments",
        "#:" => "source_reference",
    ];

    /**
     * We're calling resource_path, which is why we need the construct.
     * This should be replaced by a config file down the road
     *
     * @author Borut Hollan <borut.hollan@gmail.com>
     *
     * @version 1.0
     */
    public function __construct()
    {
        $this->config = [
            'source_dir' => resource_path('lang/i18n/'),

            'supported_locales' => [
                'en_GB',
                'sl_SI'
            ],

            'default_locale' => 'en_GB'
        ];
    }

    /**
     * Parse the file and return data in an array
     *
     * @return  Array
     *
     * @author Borut Hollan <borut.hollan@gmail.com>
     *
     * @version 1.0
     */
    public function getData($locale)
    {
        $file = $this->config['source_dir'] . $locale . "/LC_MESSAGES/messages.po";

        $data = [
            'headers' => [],
            'strings' => [],
        ];
        if (file_exists($file)) {
            $handle = fopen($file, "r");
            if ($handle) {
                // Get Headers
                $headers = $this->getHeaders($handle);

                $data['headers'] = $headers;

                while(($line = fgets($handle)) !== false) {
                    $data['strings'][] = $this->getStrings($line, $handle);
                }
                fclose($handle);
            } else {
                // error opening the file.
            }
        }

        return $data;

    }

    /**
     * Get data blocks for each string, including it's comments and sources
     *
     * @param   String          $line       Current line in the file.
     * @param   Stream_resource $handle     File resource handle
     *
     * @return  Array
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function getStrings($line, $handle)
    {
        $string = [];
        do {
            $line = trim($line);
            $type = array_get($this->comment_types, strtok($line, " "), strtok($line, " "));
            if (strpos($line, "#") !== 0) {
                $string[$type][] = substr($line, ( strpos($line, "\"") + 1 ), -1);
            } else {
                $string[$type][] = $line;
            }

        } while (($line = fgets($handle)) !== false && $line !== "\n");

        return $string;
    }

    public function getHeaders($handle)
    {
        $headers = [];
        while (($line = fgets($handle)) !== false && $line !== "\n") {
            $line = trim($line);
            if (strpos($line, "\"") === 0) {
                // Headers
                $header = substr(strtok($line, ": "), 1);
                $header_value = substr($line, ( strpos($line, ": ") + 2 ), -3);
                $headers[$header] = $header_value;
            } else {
                $headers[] = $line;
            }
        }

        return $headers;
    }
}
