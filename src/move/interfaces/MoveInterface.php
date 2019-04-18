<?php

namespace chess\move\interfaces;


use chess\multipliers\interfaces\MultiplierInterface;
use chess\vector\interfaces\VectorInterface;

interface MoveInterface
{
    const MUST_EAT = 'must';
    const CAN_EAT = 'eat';
    const NO_EAT = 'no eat';
    const IS_CASTLING = 'castling';
    const NOT_CASTLING = 'not castling';
    const ONLY_FIRST_MOVE = 'only first move';
    const NOT_ONLY_FIRST_MOVE = 'not only first move';

    public function __construct(
        MultiplierInterface $multiplier,
        VectorInterface $vector,
        $eat,
        $castling,
        $first
    );
    public function multiplier() : MultiplierInterface;
    public function vector() : VectorInterface;
    public function mustEat() : bool;
    public function canEat() : bool;
    public function isCastling() : bool;
    public function mustFirst() : bool;
}