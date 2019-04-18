<?php

namespace chess\interfaces\factory;


use chess\interfaces\position\PositionInterface;

interface PositionFactoryInterface
{
    public function build(int $x, int $y) : PositionInterface;
}