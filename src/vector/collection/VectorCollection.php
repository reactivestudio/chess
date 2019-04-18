<?php

namespace chess\vector\collection;


use chess\base\AbstractCollection;
use chess\vector\elementary\AskewLeft;
use chess\vector\elementary\AskewRight;
use chess\vector\elementary\LeftTop;
use chess\vector\elementary\Right;
use chess\vector\elementary\RightTop;
use chess\vector\elementary\Top;
use chess\vector\elementary\TopLeft;
use chess\vector\elementary\TopRight;
use chess\vector\interfaces\VectorCollectionInterface;
use chess\vector\interfaces\VectorInterface;

class VectorCollection extends AbstractCollection implements VectorCollectionInterface
{
    public static function settings(): array
    {
        return [
            AskewLeft::class,
            AskewRight::class,
            LeftTop::class,
            Right::class,
            RightTop::class,
            Top::class,
            TopLeft::class,
            TopRight::class,
        ];
    }

    /**
     * @param VectorInterface $item
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function add(VectorInterface $item)
    {
        $this->addItem($item, $item->id());
    }

    /**
     * @param string $key
     * @return VectorInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get(string $key) : VectorInterface
    {
        return $this->getItem($key);
    }
}