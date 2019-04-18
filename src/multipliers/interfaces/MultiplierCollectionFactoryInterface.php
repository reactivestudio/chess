<?php

namespace chess\multipliers\interfaces;


interface MultiplierCollectionFactoryInterface
{
    public function __construct(MultiplierFactoryInterface $factory);
    public function build() : MultiplierCollectionInterface;
}