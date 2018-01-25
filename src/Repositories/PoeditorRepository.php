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
    public function __construct(PluralsRepository $plurals)
    {
        $this->plurals = $plurals;
    }

    /**
     * Returns full path to .po file based on supplied locale
     *
     * @param   String $locale Locale string (en_GB)
     *
     * @return  String filename
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function getFilename($locale) {
        $domain = config('laravel-poeditor.domain');
        return config('laravel-poeditor.source_dir') . $locale . '/LC_MESSAGES/' . $domain . '.po';
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
    public function getData($locale, $cache = true)
    {
        $key = $locale . "_translations";

        /*if ($cache && Cache::has($key)) {
            return Cache::get($key);
        }*/

        $file = $this->getFilename($locale);

        $data = [
            'headers' => [],
            'strings' => [],
        ];

        if (file_exists($file)) {
            $handle = fopen($file, 'r');
            if ($handle) {
                // Get Headers
                $data['headers'] = $this->getHeaders($handle);

                while(($line = fgets($handle)) !== false) {
                    $data['strings'][] = $this->getStrings($line, $handle);
                }
                fclose($handle);
            } else {
                // error opening the file.
            }
        }

        Cache::put($key, $data, 600);

        uasort($data['strings'], function ($a,$b) {
            if ($a['original'] == $b['original']) {
                return 0;
            }
            return $a['original'] < $b['original'] ? -1 : 1;
        });

        uasort($data['strings'], function ($a,$b) {
            $untranslated = empty($a['translation']) && empty($a['msgstr[0]']);
            return $untranslated ? -1 : 1;
        });

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

        if (empty($plural)) {
            $data['strings'][$key]['translation'] = $translation;
        } else {
            $msgstr = "msgstr[$plural]";
            $data['strings'][$key][$msgstr] = $translation;
        }

        Cache::put($cache_key, $data, 600);

        return ['status' => 'ok'];
    }

    public function saveToFile($locale, $backup = true, $custom_headers = false)
    {
        $existing_file = $this->getFilename($locale);

        if ($backup) {
            $this->createBackup($existing_file);
        } else {
            if (file_exists($existing_file)) {
                unlink($existing_file);
            }
        }

        $this->writeToFile($existing_file, $locale, $custom_headers);
    }

    public function createBackup($filename)
    {
        if (!file_exists($filename)) {
            return false;
        }
        $backup_filename = $filename . "_" . date('Y-m-d-H-i-s') . ".backup";
        return rename($filename, $backup_filename);
    }

    public function writeToFile($filename, $locale, $custom_headers = false)
    {
        $data = Cache::get($locale . '_translations');
        if ($custom_headers) {
            $headers = $this->customHeaders($locale);
        } else {
            $headers = $data['headers'];
        }

        $this->writeHeaders($filename, $headers);
        $this->writeStrings($filename, $data['strings']);
    }

    public function writeHeaders($filename, $headers)
    {
        if (empty($headers)) {
            return;
        }

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
        if (empty($strings_array)) {
            return;
        }

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

    public function customHeaders($locale) {
        $plurals = $this->plurals->getForLocale($locale);

        $plurals_value = substr($plurals['header'], 14, strlen($plurals['header']) - 16);

        $headers = [
            '# ' . config('laravel-poeditor.project_name'),
            '# Laravel PoEditor',
            'msgid ""',
            'msgstr ""',

            'Project-Id-Version' => config('laravel-poeditor.project_name'),
            'POT-Creation-Date' => date('Y-m-d H:iO'),
            'PO-Revision-Date' => date('Y-m-d H:iO'),
            'Last-Translator' => config('laravel-poeditor.translator'),
            'Language-Team' => config('laravel-poeditor.language_team'),
            'Language' => $locale,
            'Plural-Forms' => $plurals_value,
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Content-Transfer-Encoding' => '8bit',
            'X-Generator' => 'Laravel PoEditor'
        ];

        return $headers;
    }
}
