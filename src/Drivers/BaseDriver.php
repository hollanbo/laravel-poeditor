<?php
namespace hollanbo\LaravelPoeditor;


class BaseDriver {
    public function __construct(PoeditorRepository $repo)
    {
        $this->repo = $repo;
    }

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

        $files = $this->compileBlade($files);

        return $files;
    }

    public function compileBlade(array $files) {
        return app()->make('hollanbo\LaravelPoeditor\BladeCompiler')->compile($files);
    }

    public function clearTmpFolder() {
        return app()->make('hollanbo\LaravelPoeditor\BladeCompiler')->clearFolder();
    }

    public function saveFiles ($locale)
    {
        $backup = config('laravel-poeditor.backup_scan');
        $this->repo->getData($locale, false);
        $this->repo->saveToFile($locale, false, true);
    }

    public function backupMoFile ($locale, $prefix = '') {
        $filename = $this->getMoFile($locale);
        if (!file_exists($filename)) {
            return false;
        }
        $backup_filename = $filename . "_" . $prefix . date('Y-m-d-H-i-s') . ".backup";
        return rename($filename, $backup_filename);
    }

    public function backupPoFile ($locale, $prefix = '') {
        $filename = $this->getPoFile($locale);
        if (!file_exists($filename)) {
            return false;
        }
        $backup_filename = $filename . "_" . $prefix . date('Y-m-d-H-i-s') . ".backup";
        return copy($filename, $backup_filename);
    }

    public function getPoFile ($locale) {
        $domain = config('laravel-poeditor.domain');
        return $this->getFilePath($locale) . $domain . '.po';
    }

    public function getMoFile ($locale) {
        $domain = config('laravel-poeditor.domain');
        return $this->getFilePath($locale) . $domain . '.po';
    }

    public function getFilePath ($locale) {
        return $path = config('laravel-poeditor.source_dir') . $locale . '/LC_MESSAGES/';
    }

    public function createEmptyFile ($locale) {
        $this->repo->saveToFile($locale, false, true);
    }

    public function runCommand($command, $locale) {
        $file = $this->getPoFile($locale);

        if (!file_exists($file)) {
            $this->createEmptyFile($locale);
        }

        exec($command);

    }
}
