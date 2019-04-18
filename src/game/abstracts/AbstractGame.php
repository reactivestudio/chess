<?php

namespace chess\game\abstracts;


use chess\game\interfaces\GameInterface;
use chess\interfaces\board\BoardInterface;
use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\service\MoveManagerInterface;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\vector\interfaces\VectorCollectionInterface;

abstract class AbstractGame implements GameInterface
{
    protected $board;
    protected $colors;
    protected $elementary;
    protected $multipliers;
    protected $moveManager;

    public function board() : BoardInterface
    {
        return $this->board;
    }

    public function colors() : ColorCollectionInterface
    {
        return $this->colors;
    }

    public function elementary(): VectorCollectionInterface
    {
        return $this->elementary;
    }

    public function multipliers(): MultiplierCollectionInterface
    {
        return $this->multipliers;
    }

    public function manager(): MoveManagerInterface
    {
        return $this->moveManager;
    }

    public function setElementaryVectors(VectorCollectionInterface $elementary)
    {
        $this->elementary = $elementary;
    }

    public function setMultipliers(MultiplierCollectionInterface $multipliers)
    {
        $this->multipliers = $multipliers;
    }

    public function setBoard(BoardInterface $board)
    {
        $this->board = $board;
    }

    public function setColors(ColorCollectionInterface $colors)
    {
        $this->colors = $colors;
    }

    public function setMoveManager(MoveManagerInterface $manager)
    {
        $this->moveManager = $manager;
    }
}