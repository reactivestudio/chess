<?php

namespace chess\game;


use chess\game\interfaces\GameBuilderInterface;
use chess\game\interfaces\GameInterface;

class GameDirector
{
    public function build(GameBuilderInterface $builder) : GameInterface
    {
        $builder->createGame();
        $builder->addBoard();
        $builder->addColors();
        $builder->addElementaryVectors();
        $builder->addMultipliers();
        $builder->addPositions();
        $builder->addFigures();
        $builder->addMoveManager();

        return $builder->getGame();
    }
}