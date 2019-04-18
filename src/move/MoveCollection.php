<?php

namespace chess\move;


use chess\base\AbstractCollection;
use chess\move\interfaces\MoveCollectionInterface;
use chess\move\interfaces\MoveInterface;

class MoveCollection extends AbstractCollection
    implements MoveCollectionInterface, \Iterator
{
    /**
     * @param MoveInterface $item
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function add(MoveInterface $item)
    {
        $this->addItem($item);
    }

    /**
     * @param $key
     * @return MoveInterface
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function get(int $key) : MoveInterface
    {
        return $this->getItem($key);
    }

    public function current()
    {
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function next(): void
    {
        next($this->items);
    }

    public function rewind(): void
    {
        reset($this->items);
    }

    public function valid(): bool
    {
        return null !== key($this->items);
    }
}