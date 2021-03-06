<?php

return [

    /**
     * Translation files location
     */
    'source_dir' => resource_path('lang/i18n/'),

    /**
     * Locales which are supported in your application.
     */
    'supported_locales' => [
        'en_GB',
        'sl_SI',
        'cs_CZ'
    ],

    /**
     * Default locale for your application
     */
    'default_locale' => 'en_GB',

    /**
     * Which driver are you using? Currently only supports xgettext
     */
    'driver' => 'xgettext',

    /**
     * Path/to/your/driver/executable
     *
     * If you have your system paths in order, this should be just one word.
     */
    'driver_executable' => 'xgettext',

    /**
     * Should I create a backup for your files before changing them?
     * This applies to publishing, scanning and saving translation
     */
    'backup_scan' => false,
    'backup_save' => false,
    'backup_publish' => false,

    'folders_to_scan' => [
        'app',
        'resources',
    ],

    'file_types' => [
        'php'
    ],

    'domain' => 'messages',

    'project_name' => 'Laravel PoEditor',

    'translator' => 'Laravel PoEditor Translator',
    'language_team' => 'Laravel PoEditor Translator Team',

    'extra_keywords' => [
        'pgettext:1c,2',
        '_c:1c,2'
    ],

    'location_header' => false,
];
