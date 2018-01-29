<?php
namespace hollanbo\LaravelPoeditor;


class XGettextDriver extends BaseDriver {

    public function poToMo ($locale)
    {
        if (config('laravel-poeditor.backup_publish')) {
            $this->backupMoFile($locale);
        }
        exec('msgfmt ' . $this->getPoFile($locale) . ' -o ' . $this->getMoFile($locale));
    }

    public function moToPo ($locale)
    {
        exec('msgunfmt ' . $this->getMoFile($locale) . ' -o ' . $this->getPoFile($locale));
    }

    public function sync ()
    {
        $files = $this->getAllFilepaths();

        $commands = $this->buildCommands($files);

        foreach ($commands as $locale => $command) {
            if (config('laravel-poeditor.backup_scan')) {
                $this->backupPoFile($locale);
            }
            $this->runCommand($command, $locale);
            $this->saveFiles($locale);
        }

        $this->clearTmpFolder();
        clearstatcache();
    }

    public function buildCommands($files)
    {
        $domain = config('laravel-poeditor.domain');
        $package_name = 'Laravel PoEditor';
        $command = "xgettext --join-existing ";
        $command .= "--default-domain=$domain ";
        $command .= "--package-name=\"$package_name\" ";

        foreach (config('laravel-poeditor.extra_keywords') as $keyword) {
            $command .= '--keyword="' . $keyword . '" ';
        }

        if (!config('laravel-poeditor.location_header')) {
            $command .= '--no-location ';
        }
        $command .= implode(' ', $files);

        $commands = [];
        foreach (config('laravel-poeditor.supported_locales') as $locale) {
            $commands[$locale] = $command . " --output-dir=" . $this->getFilePath($locale);
        }

        return $commands;
    }
}
