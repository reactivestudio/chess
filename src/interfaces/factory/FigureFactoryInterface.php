<?php

namespace chess\interfaces\factory;


use chess\figure\interfaces\FigureTypeMappingInterface;
use chess\interfaces\collection\PositionCollectionInterface;
use chess\interfaces\color\ColorInterface;
use chess\interfaces\figure\FigureInterface;
use chess\interfaces\position\PositionInterface;
use chess\move\interfaces\MoveCollectionFactoryInterface;

interface FigureFactoryInterface
{
    public function __construct(
        MoveCollectionFactoryInterface $factory,
        PositionCollectionInterface $positions,
        FigureTypeMappingInterface $mapping
    );
    public function build(
        int $type,
        ColorInterface $color,
        PositionInterface $position
    ) : FigureInterface;
}