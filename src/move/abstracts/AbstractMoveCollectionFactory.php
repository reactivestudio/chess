<?php

namespace chess\move\abstracts;


use chess\move\interfaces\MoveCollectionFactoryInterface;
use chess\move\interfaces\MoveCollectionInterface;
use chess\move\interfaces\MoveFactoryInterface;
use chess\move\interfaces\MoveSettingMappingInterface;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\vector\interfaces\VectorCollectionInterface;

abstract class AbstractMoveCollectionFactory implements MoveCollectionFactoryInterface
{
    protected $factory;
    protected $mapping;
    protected $multipliers;
    protected $elementary;
    protected $collection;

    abstract public function build(int $figureType) : MoveCollectionInterface;
    public function __construct(
        MoveFactoryInterface $factory,
        MoveSettingMappingInterface $mapping,
        MultiplierCollectionInterface $multipliers,
        VectorCollectionInterface $elementary
    )
    {
        $this->factory = $factory;
        $this->mapping = $mapping;
        $this->multipliers = $multipliers;
        $this->elementary = $elementary;
    }
}