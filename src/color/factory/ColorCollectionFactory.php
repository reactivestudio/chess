<?php

namespace chess\color\factory;


use chess\color\ColorCollection;
use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\color\ColorInterface;
use chess\interfaces\factory\ColorCollectionFactoryInterface;

class ColorCollectionFactory implements ColorCollectionFactoryInterface
{
    private $factory;
    private $colors;

    public function __construct(ColorFactory $factory)
    {
        $this->factory = $factory;
        $this->colors = new ColorCollection();
    }

    /**
     * @return ColorCollectionInterface
     * @throws \chess\exceptions\ColorCollectionIsFullException
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function build() : ColorCollectionInterface
    {
        foreach (ColorInterface::NAMES as $id) {
            $this->colors->add($this->factory->build($id));
        }

        return $this->colors;
    }
}