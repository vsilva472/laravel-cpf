<?php

namespace Vsilva472\Tests;

use Illuminate\Foundation\Application;

trait CreateApplication
{
    public function createApplication()
    {
        $config = new \Illuminate\Config\Repository([
            'logging' => [
                'default' => 'syslog',
                'channels' => [
                    'syslog' => [
                        'driver' => 'syslog',
                        'level' => 'debug',
                    ],
                ]
            ],
            'cache' => [
                'default' => 'array',
                'stores' => [
                    'array' => [
                        'driver' => 'array',
                    ],
                ],
            ]
        ]);

        $app = new Application(realpath(__DIR__.'/../../'));
        $app->config = $config;
        $app->debug = true;

        $app->register(\Illuminate\Filesystem\FilesystemServiceProvider::class, true);
        $app->register(\Illuminate\Validation\ValidationServiceProvider::class, true);
        $app->register(\Illuminate\Translation\TranslationServiceProvider::class, true);

        return $app;
    }
}
