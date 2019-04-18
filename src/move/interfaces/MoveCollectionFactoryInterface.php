<?php

namespace chess\move\interfaces;



use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\vector\interfaces\VectorCollectionInterface;

interface MoveCollectionFactoryInterface
{
    public function __construct(
        MoveFactoryInterface $factory,
        MoveSettingMappingInterface $mapping,
        MultiplierCollectionInterface $multipliers,
        VectorCollectionInterface $elementary
    );
    public function build(int $figureType) : MoveCollectionInterface;
}