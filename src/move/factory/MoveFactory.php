<?php

namespace chess\move\factory;


use chess\move\interfaces\MoveFactoryInterface;
use chess\move\interfaces\MoveInterface;
use chess\move\Move;
use chess\multipliers\interfaces\MultiplierInterface;
use chess\vector\interfaces\VectorInterface;

class MoveFactory implements MoveFactoryInterface
{
    public function build(
        MultiplierInterface $multiplier,
        VectorInterface $vector,
        $eat,
        $castling,
        $first
    ) : MoveInterface
    {
        return new Move(
            $multiplier,
            $vector,
            $eat,
            $castling,
            $first
        );
    }
}