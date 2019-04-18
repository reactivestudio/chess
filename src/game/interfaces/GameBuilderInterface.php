<?php

namespace chess\game\interfaces;


interface GameBuilderInterface
{
    public function createGame();
    public function addBoard();
    public function addColors();
    public function addElementaryVectors();
    public function addMultipliers();
    public function addFigures();
    public function addPositions();
    public function addMoveManager();
    public function getGame() : GameInterface;
}