<?php

namespace chess\multipliers\abstracts;


use chess\multipliers\interfaces\MultiplierCollectionFactoryInterface;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\multipliers\interfaces\MultiplierFactoryInterface;

abstract class AbstractMultiplierCollectionFactory implements MultiplierCollectionFactoryInterface
{
    protected $factory;
    protected $multipliers;

    abstract public function build() : MultiplierCollectionInterface;

    public function __construct(MultiplierFactoryInterface $factory)
    {
        $this->factory = $factory;
    }
}