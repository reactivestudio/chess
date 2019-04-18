<?php

namespace chess\board\factory;


use chess\board\Board;
use chess\interfaces\board\BoardInterface;
use chess\interfaces\factory\BoardFactoryInterface;

class BoardFactory implements BoardFactoryInterface
{
    const BOARD_SIZE = 8;

    public function build() : BoardInterface
    {
        return new Board(self::BOARD_SIZE);
    }
}