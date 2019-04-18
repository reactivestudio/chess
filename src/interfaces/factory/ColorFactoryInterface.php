<?php

namespace chess\interfaces\factory;


use chess\interfaces\color\ColorInterface;

interface ColorFactoryInterface
{
    public function build(string $name) : ColorInterface;
}