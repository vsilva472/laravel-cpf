<?php

namespace Vsilva472\Tests\LaravelCPF;

use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Application;
use Vsilva472\LaravelCPF\LaravelCPFServiceProvider;

class LaravelCPFServiceProviderTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->service = new LaravelCPFServiceProvider($this->app);
    }

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

    /**
     * @test
     */
    public function bootMustBeReturnNull()
    {
        $this->assertNull($this->service->boot());
    }

    /**
     * @test
     */
    public function registerMusteReturnNull()
    {
        $this->assertNull($this->service->register());
    }
}
