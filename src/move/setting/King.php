<?php

namespace chess\move\setting;


use chess\move\abstracts\AbstractFigureMoveSetting;
use chess\move\interfaces\MoveInterface;
use chess\multipliers\type\SimpleDoubleWithReverse;
use chess\multipliers\type\SimpleWithReverse;
use chess\vector\elementary\AskewLeft;
use chess\vector\elementary\AskewRight;
use chess\vector\elementary\Right;
use chess\vector\elementary\Top;

class King extends AbstractFigureMoveSetting
{
    public function rules() : array
    {
        return [
            [
                SimpleWithReverse::class,
                Top::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                Right::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                AskewLeft::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                AskewRight::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleDoubleWithReverse::class,
                Right::class,
                MoveInterface::NO_EAT,
                MoveInterface::IS_CASTLING,
                MoveInterface::ONLY_FIRST_MOVE
            ],
        ];
    }
}