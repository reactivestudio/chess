<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class Rook extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [1, 1],
            [8, 1],
        ];
    }

    protected function black() : array
    {
        return [
            [1, 8],
            [8, 8],
        ];
    }
}