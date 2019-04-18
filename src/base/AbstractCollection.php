<?php

namespace chess\base;


use chess\exceptions\{
    KeyHasUseException,
    KeyInvalidException,
};
use chess\interfaces\collection\CollectionInterface;

abstract class AbstractCollection implements CollectionInterface
{
    protected $items = [];

    /**
     * @param mixed $item
     * @param string|null $key
     * @throws KeyHasUseException
     */
    public function addItem($item, string $key = null)
    {
        if (null === $key) {
            $this->items[] = $item;
        } elseif ($this->keyExists($key)) {
            throw new KeyHasUseException("Key $key already in use.");
        } else {
            $this->items[$key] = $item;
        }
    }



    /**
     * @param $key
     * @return mixed
     * @throws KeyInvalidException
     */
    public function getItem($key)
    {
        if ($this->keyExists($key)) {
            return $this->items[$key];
        }
        else {
            throw new KeyInvalidException("Invalid key $key.");
        }
    }

    /**
     * @param $key
     * @throws KeyInvalidException
     */
    public function delete($key)
    {
        if ($this->keyExists($key)) {
            unset($this->items[$key]);
        } else {
            throw new KeyInvalidException("Invalid key $key.");
        }
    }

    public function keys() : array
    {
        return array_keys($this->items);
    }

    public function length() : int
    {
        return count($this->items);
    }

    public function isEmpty() : bool
    {
        return 0 === $this->length();
    }

    public function keyExists($key) : bool
    {
        return array_key_exists($key, $this->items);
    }

    public function clear()
    {
        $this->items = [];
    }
}