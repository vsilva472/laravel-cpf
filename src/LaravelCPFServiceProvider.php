<?php
/**
 * Created by PhpStorm.
 * User: vinicius
 * Date: 25/01/2018
 * Time: 14:55
 */

namespace Vsilva472\LaravelCPF;

use Illuminate\Support\ServiceProvider;

class LaravelCPFServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('cpf', "Vsilva472\LaravelCPF\LaravelCPF@validate", 'CPF Inválido');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}