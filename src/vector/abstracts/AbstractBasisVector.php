<?php

namespace chess\vector\abstracts;


use chess\vector\interfaces\BasisVectorInterface;

abstract class AbstractBasisVector implements BasisVectorInterface
{
    protected $x;
    protected $y;

    public function getX() : int
    {
        return $this->x;
    }

    public function getY() : int
    {
        return $this->y;
    }

    public function getValue() : array
    {
        return [$this->x, $this->y];
    }
}