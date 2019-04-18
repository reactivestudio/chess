<?php

namespace chess\multipliers\abstracts;



use chess\multipliers\interfaces\MultiplierInterface;

abstract class AbstractMultiplier implements MultiplierInterface
{
    protected $id;
    protected $elementary;
    protected $length;
    protected $direction;

    public function __construct()
    {
        $this->id = static::class;
    }

    public function id() : string
    {
        return $this->id;
    }

    public function elementary() : int
    {
        return $this->elementary;
    }

    public function length() : int
    {
        return $this->length;
    }

    public function direction() : array
    {
        return $this->direction;
    }
}