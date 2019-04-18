<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class Pawn extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [1, 2],
            [2, 2],
            [3, 2],
            [4, 2],
            [5, 2],
            [6, 2],
            [7, 2],
            [8, 2],
        ];
    }

    protected function black() : array
    {
        return [
            [1, 7],
            [2, 7],
            [3, 7],
            [4, 7],
            [5, 7],
            [6, 7],
            [7, 7],
            [8, 7],
        ];
    }
}