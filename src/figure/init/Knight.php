<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class Knight extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [2, 1],
            [7, 1],
        ];
    }

    protected function black() : array
    {
        return [
            [2, 8],
            [7, 8],
        ];
    }
}