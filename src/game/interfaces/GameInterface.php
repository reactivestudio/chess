<?php

namespace chess\game\interfaces;


use chess\interfaces\board\BoardInterface;
use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\service\MoveManagerInterface;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\vector\interfaces\VectorCollectionInterface;

interface GameInterface
{
    public function board() : BoardInterface;
    public function colors() : ColorCollectionInterface;
    public function elementary() : VectorCollectionInterface;
    public function multipliers() : MultiplierCollectionInterface;
    public function manager() : MoveManagerInterface;
    public function setBoard(BoardInterface $board);
    public function setColors(ColorCollectionInterface $colors);
    public function setElementaryVectors(VectorCollectionInterface $elementary);
    public function setMultipliers(MultiplierCollectionInterface $multipliers);
    public function setMoveManager(MoveManagerInterface $manager);
}