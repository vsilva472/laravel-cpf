<?php

namespace Vsilva472\Tests\LaravelCPF;

use PHPUnit\Framework\TestCase;
use Vsilva472\LaravelCPF\LaravelCPF;
use Vsilva472\phpCPF\CPF as phpCPF;

class LaravelCPFTest extends TestCase
{
    /**
     * @test
     * @covers \Vsilva472\LaravelCPF\LaravelCPF::__construct
     * @covers \Vsilva472\LaravelCPF\LaravelCPF::validate
     */
    public function testValidate()
    {
        $phpcpf = new phpCPF();
        $service = new LaravelCPF($phpcpf);
        $validate = $service->validate('cpf', '000', [], 'default');

        $this->assertFalse($validate);
    }

    /**
     * @test
     * @covers \Vsilva472\LaravelCPF\LaravelCPF::__construct
     * @covers \Vsilva472\LaravelCPF\LaravelCPF::validate
     */
    public function testValidateWithValidCPF()
    {
        $phpcpf = new phpCPF();
        $service = new LaravelCPF($phpcpf);
        $validate = $service->validate('cpf', '16326260710', [], 'default');

        $this->assertTrue($validate);
    }

    /**
     * @test
     * @covers \Vsilva472\LaravelCPF\LaravelCPF::__construct
     */
    public function constructMustBeReturnObjectInstance()
    {
        $phpcpf = new phpCPF();
        $service = new LaravelCPF($phpcpf);

        $this->assertInstanceOf(LaravelCPF::class, $service);
    }
}
