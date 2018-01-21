<?php
namespace hollanbo\LaravelPoeditor;


class XGettextDriver extends BaseDriver{

    public function poToMo ($locale)
    {
        $path = config('laravel-poeditor.source_dir') . $locale . '/LC_MESSAGES/';

        exec('msgfmt ' . $path . 'messages.po -o ' . $path . 'messages.mo');
    }

    public function moToPo ($locale)
    {
        $path = config('laravel-poeditor.source_dir') . $locale . '/LC_MESSAGES/';

        exec('msgunfmt ' . $path . 'messages.mo -o ' . $path . 'messages1.po');
    }

    public function sync ()
    {
        $files = $this->getAllFilepaths();

        $commands = $this->buildCommands($files);

        dd($commands[0]);
    }

    public function buildCommands($files)
    {
        $domain = config('laravel-poeditor.domain');
        $package_name = config('laravel-poeditor.package_name');
        $command = "xgettext --join-existing ";
        $command .= "--default-domain=$domain ";
        $command .= "--package-name=\"$package_name\" ";
        $command .= implode(' ', $files);

        $commands = [];
        foreach (config('laravel-poeditor.supported_locales') as $locale) {
            $path = config('laravel-poeditor.source_dir') . $locale . '/LC_MESSAGES/';

            $commands[] = $command . " --output-dir=" . $path;
        }

        return $commands;
    }
}
