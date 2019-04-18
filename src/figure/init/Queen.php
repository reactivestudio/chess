<?php

namespace chess\figure\init;


use chess\base\AbstractFigureInit;

class Queen extends AbstractFigureInit
{
    protected function white() : array
    {
        return [
            [4, 1]
        ];
    }

    protected function black() : array
    {
        return [
            [4, 8]
        ];
    }
}