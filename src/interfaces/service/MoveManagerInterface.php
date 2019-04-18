<?php

namespace chess\interfaces\service;


use chess\interfaces\board\BoardInterface;
use chess\interfaces\position\PositionInterface;

interface MoveManagerInterface
{
    public function __construct(BoardInterface $board);
    public function move(array $from, array $to) : bool;
    public function canMove(PositionInterface $from, PositionInterface $to) : bool;
}