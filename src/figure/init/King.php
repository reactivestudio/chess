<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class King extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [5, 1],
        ];
    }

    protected function black() : array
    {
        return [
            [5, 8],
        ];
    }
}