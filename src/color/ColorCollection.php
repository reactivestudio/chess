<?php

namespace chess\color;


use chess\base\AbstractCollection;
use chess\exceptions\{
    ColorCollectionIsFullException,
    KeyHasUseException,
    KeyInvalidException,
};
use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\color\ColorInterface;

class ColorCollection extends AbstractCollection implements ColorCollectionInterface
{
    const MAX_LENGTH = 2;

    /**
     * @param ColorInterface $item
     * @throws ColorCollectionIsFullException
     * @throws KeyHasUseException
     */
    public function add(ColorInterface $item)
    {
        if ($this->length() >= self::MAX_LENGTH) {
            throw new ColorCollectionIsFullException("Color collection can't consist more " . self::MAX_LENGTH ."elements.");
        }

        $this->addItem($item, $item->getId());
    }

    /**
     * @param $key
     * @return ColorInterface
     * @throws KeyInvalidException
     */
    public function get($key) : ColorInterface
    {
        return $this->getItem($key);
    }
}