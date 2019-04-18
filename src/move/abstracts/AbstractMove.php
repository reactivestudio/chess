<?php

namespace chess\move\abstracts;


use chess\move\interfaces\MoveInterface;
use chess\multipliers\interfaces\MultiplierInterface;
use chess\vector\interfaces\VectorInterface;

abstract class AbstractMove implements MoveInterface
{
    protected $multiplier;
    protected $vector;
    protected $eat;
    protected $castling;
    protected $first;

    public function __construct(
        MultiplierInterface $multiplier,
        VectorInterface $vector,
        $eat,
        $castling,
        $first
    )
    {
        $this->multiplier = $multiplier;
        $this->vector = $vector;
        $this->eat = $eat;
        $this->castling = $castling;
        $this->first = $first;
    }

    public function multiplier(): MultiplierInterface
    {
        return $this->multiplier;
    }

    public function vector(): VectorInterface
    {
        return $this->vector;
    }

    public function mustEat(): bool
    {
        return self::MUST_EAT === $this->eat;
    }

    public function canEat(): bool
    {
        return self::CAN_EAT === $this->eat || $this->mustEat();
    }

    public function isCastling(): bool
    {
        return self::IS_CASTLING === $this->castling;
    }

    public function mustFirst(): bool
    {
        return self::ONLY_FIRST_MOVE === $this->first;
    }
}