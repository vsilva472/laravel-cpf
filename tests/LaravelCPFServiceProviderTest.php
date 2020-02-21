<?php

namespace Vsilva472\Tests\LaravelCPF;

use Illuminate\Foundation\Testing\TestCase;
use Vsilva472\LaravelCPF\LaravelCPFServiceProvider;
use Vsilva472\Tests\CreateApplication;

class LaravelCPFServiceProviderTest extends TestCase
{
    use CreateApplication;

    public function setUp(): void
    {
        parent::setUp();

        $this->service = new LaravelCPFServiceProvider($this->app);
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
