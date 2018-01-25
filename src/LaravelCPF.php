<?php

namespace Vsilva472\LaravelCPF;

use Vsilva472\phpCPF\CPF as phpCPF;

class LaravelCPF
{
    /**
     * @var phpCPF
     */
    protected $cpfValidator;

    /**
     * LaravelCPF constructor.
     *
     * @param phpCPF $cpf
     */
    public function __construct(phpCPF $cpf)
    {
        $this->cpfValidator = $cpf;
    }

    /**
     * Validate a given CPF value
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     *
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator)
    {
        return $this->cpfValidator->validate($value);
    }
}