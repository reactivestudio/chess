<?php

namespace chess\interfaces\factory;


use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\collection\FigureCollectionInterface;
use chess\interfaces\collection\PositionCollectionInterface;

interface FigureCollectionFactoryInterface
{
    public function __construct(
        FigureFactoryInterface $figure,
        ColorCollectionInterface $colors,
        PositionCollectionInterface $positions
    );
    public function build() : FigureCollectionInterface;
}