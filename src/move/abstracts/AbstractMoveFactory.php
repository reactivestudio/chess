<?php

namespace chess\move\abstracts;


use chess\move\interfaces\MoveFactoryInterface;
use chess\move\interfaces\MoveInterface;
use chess\multipliers\interfaces\MultiplierInterface;
use chess\vector\interfaces\VectorInterface;

abstract class AbstractMoveFactory implements MoveFactoryInterface
{
    abstract public function build(
        MultiplierInterface $multiplier,
        VectorInterface $vector,
        $eat,
        $castling,
        $first
    ): MoveInterface;
}