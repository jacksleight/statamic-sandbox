<?php

namespace Dev\Bite;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'resources/js/cp.js'
    ];

    protected $fieldtypes = [
        \Dev\Bite\Fieldtypes\AddonTest::class,
    ];
}
