<?php

namespace chess\vector\elementary;


use chess\vector\abstracts\AbstractVector;
use chess\vector\interfaces\VectorInterface;
use chess\vector\basis\Top as BasisTop;
use chess\vector\basis\Right as BasisRight;

class TopRight extends AbstractVector
{
    public static function rule(): VectorInterface
    {
        return self::sum(
            self::scalar(1, new BasisRight()),
            self::scalar(2, new BasisTop())
        );
    }
}