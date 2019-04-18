<?php

namespace chess\move\interfaces;


use chess\multipliers\interfaces\MultiplierInterface;
use chess\vector\interfaces\VectorInterface;

interface MoveFactoryInterface
{
    public function build(
        MultiplierInterface $multiplier,
        VectorInterface $vector,
        $eat,
        $castling,
        $first
    ) : MoveInterface;
}