<?php

namespace chess\interfaces\board;


use chess\interfaces\collection\{
    FigureCollectionInterface,
    PositionCollectionInterface
};

interface BoardInterface
{
    public function __construct(int $size);
    public function size() : int;
    public function positions() : PositionCollectionInterface;
    public function figures() : FigureCollectionInterface;
    public function setPositions(PositionCollectionInterface $positions);
    public function setFigures(FigureCollectionInterface $figures);
    public function __toString() : string;
}