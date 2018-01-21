<?php
namespace hollanbo\LaravelPoeditor;


class BaseDriver {
    public function determineDriver()
    {
        $driver = config('laravel-poeditor.driver');

        switch ($driver) {
            case 'xgettext':
                return app()->make('hollanbo\LaravelPoeditor\XGettextDriver');
        }

        throw \Exception('Wrong driver');
    }

    public function getAllFilepaths ()
    {
        $folders = config('laravel-poeditor.folders_to_scan');


        $files = [];

        foreach ($folders as $folder) {
            $folder = base_path($folder);
            $di = new \RecursiveDirectoryIterator($folder);
            foreach (new \RecursiveIteratorIterator($di) as $filename => $file) {
                $extension = pathinfo($file, PATHINFO_EXTENSION);

                if (in_array($extension, config('laravel-poeditor.file_types'))) {
                    $files[] = $filename;
                }
            }
        }

        return $files;
    }
}
