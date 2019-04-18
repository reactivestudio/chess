<?php

namespace chess\interfaces\factory;


use chess\color\factory\ColorFactory;
use chess\interfaces\collection\ColorCollectionInterface;

interface ColorCollectionFactoryInterface
{
    public function __construct(ColorFactory $factory);
    public function build() : ColorCollectionInterface;
}