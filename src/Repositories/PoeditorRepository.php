<?php

namespace hollanbo\LaravelPoeditor;

use Cache;

class PoeditorRepository {
    public $config;

    public $types = [
        '#' => 'translator_comments',
        '#.' => 'extracted_comments',
        '#:' => 'source_reference',
        'msgid' => 'original',
        'msgid_plural' => 'original_plural',
        'msgstr' => 'translation',
        'msgctxt' => 'context'
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

    public function getFilename($locale) {
        return $this->config['source_dir'] . $locale . '/LC_MESSAGES/messages.po';
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
        $key = $locale . "_translations";

        if (Cache::has($key)) {
            return Cache::get($key);
        }

        $file = $this->getFilename($locale);

        $data = [
            'headers' => [],
            'strings' => [],
        ];
        if (file_exists($file)) {
            $handle = fopen($file, 'r');
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

        Cache::put($key, $data, 600);

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
        $type_tmp = '';
        do {
            $line = trim($line);
            if (strpos($line, '"') === 0) {
                $type = $type_tmp;
            } else {
                $type = array_get($this->types, strtok($line, " "), strtok($line, " "));
                $type_tmp = $type;
            }

            if (strpos($line, "#") !== 0) {
                if (!isset($string[$type])) {
                    $string[$type] = "";
                }

                $string[$type] .= substr($line, ( strpos($line, '"') + 1 ), -1);
            } else {
                $string[$type][] = $line;
            }

        } while (($line = fgets($handle)) !== false && $line !== "\n");

        return $string;
    }

    /**
     * Get headers from file
     *
     * @param   stream_resource $handle
     *
     * @return  array
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function getHeaders($handle)
    {
        $headers = [];
        while (($line = fgets($handle)) !== false && $line !== "\n") {
            $line = trim($line);
            if (strpos($line, "\"") === 0) {
                // Headers
                $result = $this->parseHeaders($line, $handle);

                $headers = array_merge($headers, $result['headers']);
                $line = $result['line'];
            }

            if ($line !== "\n" ) {
                $headers[] = $line;
            } else {
                break;
            }
        }

        return $headers;
    }

    public function parseHeaders($line, $handle)
    {
        $headers = [];
        $headers_string = "";
        do {
            $headers_string .= trim($line);
        } while (($line = fgets($handle)) !== false && strpos($line, "\"") === 0);

        $headers_string = str_replace('""', '', substr($headers_string, 1, strlen($headers_string) - 4));

        $headers_tmp = explode('\n', $headers_string);

        foreach ($headers_tmp as $row) {
            $header = substr(strtok($row, ": "), 0);
            $header_value = substr($row, ( strpos($row, ": ") + 2 ));
            $headers[$header] = $header_value;
        }

        return ['line' => $line, 'headers' => $headers];
    }

    /**
     * Save translations to cache
     *
     * @param   String $locale
     * @param   String $key
     * @param   String $translation
     *
     * @return  Array response
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function saveTranslation($locale, $key, $translation, $plural)
    {
        $cache_key = $locale . "_translations";

        if (!Cache::has($cache_key)) {
            return ['status' => 'error', 'dev_message' => 'Cache empty', 'user_message' => _('An error occured while saving your translation, please refresh.')];
        }

        $data = Cache::get($cache_key);

        if (is_null($plural)) {
            $data['strings'][$key]['translation'] = $translation;
        } else {
            $msgstr = "msgstr[$plural]";
            $data['strings'][$key][$msgstr] = $translation;
        }
        Cache::put($cache_key, $data, 600);

        return ['status' => 'ok'];
    }

    public function saveToFile($locale)
    {
        $existing_file = $this->getFilename($locale);

        $this->createBackup($existing_file);

        $this->writeToFile($existing_file, $locale);
    }

    public function createBackup($filename)
    {
        $backup_filename = $filename . "_" . date('Y-m-d-H-i-s') . ".backup";
        rename($filename, $backup_filename);
    }

    public function writeToFile($filename, $locale)
    {
        $data = Cache::get($locale . '_translations');
        $this->writeHeaders($filename, $data['headers']);
        $this->writeStrings($filename, $data['strings']);
    }

    public function writeHeaders($filename, $headers)
    {
        foreach ($headers as $header => $line) {
            if (!is_numeric($header)) {
                // If the key is not numeric, it means it's a valid header.
                // Otherwise it's just comments and stuff and we just insert the line as is.
                $line = '"' . $header . ': ' . $line . '\n"';
            }

            $line .= "\n";
            file_put_contents($filename, $line, FILE_APPEND);
        }
    }

    public function writeStrings($filename, $strings_array)
    {
        $types = array_flip($this->types);
        foreach ($strings_array as $string_data) {
            file_put_contents($filename, "\n", FILE_APPEND);

            foreach ($string_data as $key => $strings) {
                $key = array_get($types, $key, $key);
                if (strpos($key, '#') === 0) {
                    // Key starts with a #, meaning it's a comment. Just write the value as is
                    $line = implode("\n", $strings) . "\n";
                } else {
                    //msgid, msgctxt, msgstr
                    $line = $key . ' ' . $this->getMsgStrings($strings);
                }

                file_put_contents($filename, $line, FILE_APPEND);
            }
        }
    }

    public function getMsgStrings($string)
    {
        return '"' . $string . "\"\n";
    }
}
