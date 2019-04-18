<?php

namespace chess\vector\abstracts;


use chess\vector\interfaces\VectorFactoryInterface;
use chess\vector\interfaces\VectorInterface;

abstract class AbstractVectorFactory implements VectorFactoryInterface
{
    public function build(string $class) : VectorInterface
    {
        return call_user_func([$class, 'rule']);
    }
}