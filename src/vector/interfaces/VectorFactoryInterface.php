<?php

namespace chess\vector\interfaces;



interface VectorFactoryInterface
{
    public function build(string $class) : VectorInterface;
}