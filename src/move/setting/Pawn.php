<?php

namespace chess\move\setting;


use chess\move\abstracts\AbstractFigureMoveSetting;
use chess\move\interfaces\MoveInterface;
use chess\multipliers\type\Simple;
use chess\multipliers\type\SimpleDouble;
use chess\multipliers\type\SimpleWithReverse;
use chess\vector\elementary\AskewLeft;
use chess\vector\elementary\AskewRight;
use chess\vector\elementary\Top;

class Pawn extends AbstractFigureMoveSetting
{
    public function rules(): array
    {
        return [
            [
                SimpleWithReverse::class,
                Top::class,
                MoveInterface::NO_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                SimpleDouble::class,
                Top::class,
                MoveInterface::NO_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::ONLY_FIRST_MOVE
            ],
            [
                Simple::class,
                AskewLeft::class,
                MoveInterface::MUST_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
            [
                Simple::class,
                AskewRight::class,
                MoveInterface::MUST_EAT,
                MoveInterface::NOT_CASTLING,
                MoveInterface::NOT_ONLY_FIRST_MOVE
            ],
        ];
    }
}