<?php

namespace chess\move;


use chess\figure\FigureType;
use chess\move\interfaces\MoveSettingMappingInterface;
use chess\move\setting\{
    Bishop,
    King,
    Knight,
    Pawn,
    Queen,
    Rook,
};

class MoveSettingMapping implements MoveSettingMappingInterface
{
    public function getSettingClass(int $figureType) : string
    {
        if (array_key_exists($figureType, $this->mapping())) {
            return $this->mapping()[$figureType];
        }

        throw new \InvalidArgumentException("No class name move setting mapping for figure type $figureType");
    }

    private function mapping()
    {
        return [
            FigureType::KING => King::class,
            FigureType::QUEEN => Queen::class,
            FigureType::ROOK => Rook::class,
            FigureType::BISHOP => Bishop::class,
            FigureType::KNIGHT => Knight::class,
            FigureType::PAWN => Pawn::class,
        ];
    }
}