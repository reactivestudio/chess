<?php

namespace chess\position\factory;


use chess\interfaces\factory\PositionFactoryInterface;
use chess\interfaces\position\PositionInterface;
use chess\position\Position;

class PositionFactory implements PositionFactoryInterface
{
    public function build(int $x, int $y) : PositionInterface
    {
        return new Position($x, $y);
    }
}