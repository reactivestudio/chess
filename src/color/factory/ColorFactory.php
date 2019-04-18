<?php

namespace chess\color\factory;


use chess\color\Color;
use chess\interfaces\color\ColorInterface;
use chess\interfaces\factory\ColorFactoryInterface;

class ColorFactory implements ColorFactoryInterface
{
    public function build(string $name) : ColorInterface
    {
        return new Color($name);
    }
}