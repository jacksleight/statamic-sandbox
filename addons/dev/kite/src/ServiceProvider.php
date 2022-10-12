<?php

namespace Dev\Kite;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'hotFile' => __DIR__.'/../vite.hot',
        'publicDirectory' => 'dist',
        'buildDirectory' => 'bundle',
        'input' => [
            'resources/js/cp.js'
        ],
    ];

    protected $fieldtypes = [
        \Dev\Kite\Fieldtypes\AddonConfigTest::class,
    ];
}
