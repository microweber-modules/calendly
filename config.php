<?php
$config = array();
$config['name'] = "Calendly";
$config['author'] = "Microweber";
$config['no_cache'] = false;
$config['ui'] = true;
$config['categories'] = "miscellaneous";
$config['position'] = 39;
$config['version'] = 1.0;

$config['settings'] = [];
$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\\Modules\\Calendly'
    ],
];

$config['settings']['service_provider'] = [
    \MicroweberPackages\Modules\Calendly\Providers\CalendlyServiceProvider::class
];
