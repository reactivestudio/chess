<?php

namespace chess\multipliers\collection;


use chess\base\AbstractCollection;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\multipliers\interfaces\MultiplierInterface;
use chess\multipliers\type\All;
use chess\multipliers\type\Simple;
use chess\multipliers\type\SimpleDouble;
use chess\multipliers\type\SimpleDoubleWithReverse;
use chess\multipliers\type\SimpleWithReverse;

class MultiplierCollection extends AbstractCollection implements MultiplierCollectionInterface
{
    public static function settings(): array
    {
        return [
            All::class,
            Simple::class,
            SimpleDouble::class,
            SimpleWithReverse::class,
            SimpleDoubleWithReverse::class,
        ];
    }

    /**
     * @param MultiplierInterface $item
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function add(MultiplierInterface $item)
    {
        $this->addItem($item, $item->id());
    }

    /**
     * @param string $key
     * @return MultiplierInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get(string $key) : MultiplierInterface
    {
        return $this->getItem($key);
    }
}