<?php

namespace chess\vector\abstracts;


use chess\vector\interfaces\BasisVectorInterface;
use chess\vector\interfaces\VectorInterface;

abstract class AbstractVector extends AbstractBasisVector implements VectorInterface
{
    protected $id;

    abstract public static function rule() : VectorInterface;

    public function __construct(int $x, int $y)
    {
        $this->id = static::class;
        $this->x = $x;
        $this->y = $y;
    }

    public function id(): string
    {
        return $this->id;
    }

    public static function scalar(
        int $scalar,
        BasisVectorInterface $vector
    ) : VectorInterface
    {
        $x = $scalar * $vector->getX();
        $y = $scalar * $vector->getY();

        return new static($x, $y);
    }

    public static function sum(
        BasisVectorInterface $one,
        BasisVectorInterface $two
    ): VectorInterface {
        $x = $one->getX() + $two->getX();
        $y = $one->getY() + $two->getY();

        return new static($x, $y);
    }
}