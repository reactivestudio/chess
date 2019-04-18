<?php

namespace chess\interfaces\collection;


use chess\interfaces\position\PositionInterface;

interface PositionCollectionInterface extends CollectionInterface
{
    public function add(PositionInterface $item);

    /**
     * @param int $x
     * @param int $y
     * @return PositionInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get(int $x, int $y) : PositionInterface;
}