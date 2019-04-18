<?php

namespace chess\vector\interfaces;


interface VectorInterface extends BasisVectorInterface
{
    public function __construct(int $x, int $y);
    public function id() : string;
    public static function rule() : VectorInterface;
    public static function scalar(
        int $scalar,
        BasisVectorInterface $vector
    ) : VectorInterface;
    public static function sum(
        BasisVectorInterface $one,
        BasisVectorInterface $two
    ) : VectorInterface;
}