<?php

namespace chess\vector\interfaces;



interface VectorCollectionFactoryInterface
{
    public function __construct(
        VectorFactoryInterface $factory
    );
    public function build() : VectorCollectionInterface;
}