<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class Bishop extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [3, 1],
            [6, 1],
        ];
    }

    protected function black() : array
    {
        return [
            [3, 8],
            [6, 8],
        ];
    }
}