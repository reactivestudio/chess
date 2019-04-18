<?php

namespace chess\vector\elementary;


use chess\vector\abstracts\AbstractVector;
use chess\vector\interfaces\VectorInterface;
use chess\vector\basis\Right as BasisRight;

class Right extends AbstractVector
{
    public static function rule(): VectorInterface
    {
        return self::scalar(1, new BasisRight());
    }
}