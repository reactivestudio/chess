<?php

namespace chess\interfaces\collection;


interface CollectionInterface
{
    public function addItem($item, string $key = null);
    public function getItem($key);
    public function delete($key);
    public function keys() : array;
    public function length() : int;
    public function isEmpty() : bool;
    public function keyExists($key) : bool;
    public function clear();
}