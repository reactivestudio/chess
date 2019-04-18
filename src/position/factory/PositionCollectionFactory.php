<?php

namespace chess\position\factory;


use chess\interfaces\collection\PositionCollectionInterface;
use chess\interfaces\factory\PositionCollectionFactoryInterface;
use chess\position\PositionCollection;

class PositionCollectionFactory implements PositionCollectionFactoryInterface
{
    private $factory;
    private $positions;

    public function __construct(PositionFactory $factory)
    {
        $this->factory = $factory;
        $this->positions = new PositionCollection();
    }

    /**
     * @param int $size
     * @return PositionCollectionInterface
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function build(int $size) : PositionCollectionInterface
    {
        foreach (range(1, $size) as $x) {
            foreach (range(1, $size) as $y) {
                $this->positions->add($this->factory->build($x, $y));
            }
        }

        return $this->positions;
    }
}