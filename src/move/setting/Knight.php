<?php

namespace chess\move\setting;


use chess\move\abstracts\AbstractFigureMoveSetting;
use chess\move\interfaces\MoveInterface;
use chess\multipliers\type\SimpleWithReverse;
use chess\vector\elementary\LeftTop;
use chess\vector\elementary\RightTop;
use chess\vector\elementary\TopLeft;
use chess\vector\elementary\TopRight;

class Knight extends AbstractFigureMoveSetting
{
    public function rules(): array
    {
        return [
            [
                SimpleWithReverse::class,
                LeftTop::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                TopLeft::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                TopRight::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleWithReverse::class,
                RightTop::class,
                MoveInterface::CAN_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
        ];
    }
}