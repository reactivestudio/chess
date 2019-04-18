<?php

namespace chess\position;


use chess\base\AbstractCollection;
use chess\interfaces\collection\PositionCollectionInterface;
use chess\interfaces\position\PositionInterface;

class PositionCollection extends AbstractCollection implements PositionCollectionInterface
{
    /**
     * @param PositionInterface $item
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function add(PositionInterface $item)
    {
        $this->addItem($item, $item->getId());
    }

    /**
     * @param int $x
     * @param int $y
     * @return PositionInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get(int $x, int $y) : PositionInterface
    {
        return $this->getItem($x . $y);
    }
}