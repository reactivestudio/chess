<?php

namespace chess\multipliers\interfaces;


interface MultiplierFactoryInterface
{
    public function build(string $class) : MultiplierInterface;
}