<?php

namespace chess\interfaces\factory;


use chess\interfaces\collection\PositionCollectionInterface;
use chess\position\factory\PositionFactory;

interface PositionCollectionFactoryInterface
{
    public function __construct(PositionFactory $factory);
    public function build(int $size) : PositionCollectionInterface;
}