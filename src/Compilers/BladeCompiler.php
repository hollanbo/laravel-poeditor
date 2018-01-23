<?php
namespace hollanbo\LaravelPoeditor;


class BladeCompiler {

    public function compile($filepaths)
    {
        $path = storage_path('framework/hollanbo/laravel-poeditor/views');
        $this->ensureCleanFolder($path);
        $extracted = $this->extractBladeFiles($filepaths);

        $extracted['blade'] = $this->compileViews($extracted['blade'], $path);

        return array_merge($extracted['regular'], $extracted['blade']);
    }

    public function ensureCleanFolder($path)
    {

        if (file_exists($path)) {
            $this->clearFolder($path);
        } else {
            mkdir($path, 0777, true);
        }


        return true;
    }

    public function clearFolder($path = '') {
        if (empty($path)) {
            $path = storage_path('framework/hollanbo/laravel-poeditor/views');
        }

        $files = glob($path . '/*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }

    public function extractBladeFiles($filepaths)
    {
        $extracted = [
            'regular' => [],
            'blade' => [],
        ];

        foreach ($filepaths as $file) {
            if (substr($file, -10) === '.blade.php') {
                $extracted['blade'][] = $file;
            } else {
                $extracted['regular'][] = $file;
            }
        }

        return $extracted;
    }

    public function compileViews($views, $output_dir) {

        $compiled = [];

        $fs = new \Illuminate\Filesystem\Filesystem($path);
        $compiler = new \Illuminate\View\Compilers\BladeCompiler($fs, $output_dir);

        foreach ($views as $view) {
            $contents = $compiler->compileString($fs->get($view));

            $compiled_view_path = $compiler->getCompiledPath($view);

            $fs->put(
                $compiled_view_path,
                $contents
            );

            $compiled[] = $compiled_view_path;
        }

        return $compiled;
    }
}
