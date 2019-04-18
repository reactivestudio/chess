<?php

namespace chess\multipliers\abstracts;


use chess\multipliers\interfaces\MultiplierFactoryInterface;
use chess\multipliers\interfaces\MultiplierInterface;

abstract class AbstractMultiplierFactory implements MultiplierFactoryInterface
{
    public function build(string $class): MultiplierInterface
    {
        return new $class();
    }
}