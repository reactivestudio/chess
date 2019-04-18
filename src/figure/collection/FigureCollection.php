<?php

namespace chess\figure\collection;


use chess\base\AbstractCollection;
use chess\interfaces\collection\FigureCollectionInterface;
use chess\interfaces\figure\FigureInterface;

class FigureCollection extends AbstractCollection implements FigureCollectionInterface
{
    /**
     * @param FigureInterface $item
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function add(FigureInterface $item)
    {
        $this->addItem($item, $item->getId());
    }

    /**
     * @param $key
     * @return FigureInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get($key) : FigureInterface
    {
        return $this->getItem($key);
    }


}