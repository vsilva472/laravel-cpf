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
        // publish langague file
        $lang_path = base_path('resources/lang');

        $this->publishes([
            __DIR__ . "/resources/lang/en/cpf.php" => $lang_path . '/en/cpf.php',
            __DIR__ . "/resources/lang/pt-br/cpf.php" => $lang_path . '/pt-br/cpf.php'
        ],'lcpf_lang');

        // Make the cpf validator
        $this->app['validator']->extend('cpf', "Vsilva472\LaravelCPF\LaravelCPF@validate", trans('cpf.cpf'));
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