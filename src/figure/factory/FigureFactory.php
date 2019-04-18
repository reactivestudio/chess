<?php

namespace chess\figure\factory;


use chess\figure\interfaces\FigureTypeMappingInterface;
use chess\interfaces\collection\PositionCollectionInterface;
use chess\interfaces\color\ColorInterface;
use chess\interfaces\factory\FigureFactoryInterface;
use chess\interfaces\figure\FigureInterface;
use chess\interfaces\position\PositionInterface;
use chess\move\interfaces\MoveCollectionFactoryInterface;

class FigureFactory implements FigureFactoryInterface
{
    private $factory;
    private $positions;
    private $mapping;

    public function __construct(
        MoveCollectionFactoryInterface $factory,
        PositionCollectionInterface $positions,
        FigureTypeMappingInterface $mapping
    )
    {
        $this->factory = $factory;
        $this->positions = $positions;
        $this->mapping = $mapping;
    }

    public function build(
        int $type,
        ColorInterface $color,
        PositionInterface $position
    ) : FigureInterface
    {
        $class = $this->mapping->getFigureTypeClass($type);

        if ($class) {
            $moves = $this->factory->build($type);
            $figure = new $class($type, $color, $moves);
            $position->attachFigure($figure);

            return $figure;
        }

        throw new \InvalidArgumentException("Can not build figure of unknown type: $type");
    }
}