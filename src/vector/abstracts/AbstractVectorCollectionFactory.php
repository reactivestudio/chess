<?php

namespace chess\vector\abstracts;


use chess\vector\interfaces\VectorCollectionFactoryInterface;
use chess\vector\interfaces\VectorCollectionInterface;
use chess\vector\interfaces\VectorFactoryInterface;

abstract class AbstractVectorCollectionFactory implements VectorCollectionFactoryInterface
{
    protected $factory;
    protected $vectors;

    abstract public function build() : VectorCollectionInterface;

    public function __construct(VectorFactoryInterface $factory)
    {
        $this->factory = $factory;
    }
}