<?php

namespace chess\figure;


use chess\figure\interfaces\FigureTypeMappingInterface;
use chess\figure\type\{
    Bishop,
    King,
    Knight,
    Pawn,
    Queen,
    Rook,
};

class FigureTypeMapping implements FigureTypeMappingInterface
{
    public function getFigureTypeClass(int $type) : string
    {
        if (array_key_exists($type, $this->mapping())) {
            return $this->mapping()[$type];
        }

        throw new \InvalidArgumentException("No class name mapping for figure type $type");
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