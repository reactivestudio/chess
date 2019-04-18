<?php

namespace chess\move\setting;


use chess\move\abstracts\AbstractFigureMoveSetting;
use chess\move\interfaces\MoveInterface;
use chess\multipliers\type\All;
use chess\vector\elementary\AskewLeft;
use chess\vector\elementary\AskewRight;

class Bishop extends AbstractFigureMoveSetting
{
    public function rules() : array
    {
        return [
            [
                All::class,
                AskewLeft::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                All::class,
                AskewRight::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
        ];
    }
}