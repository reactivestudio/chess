<?php

namespace chess\multipliers\interfaces;


use chess\interfaces\collection\CollectionInterface;

interface MultiplierCollectionInterface extends CollectionInterface
{
    public function add(MultiplierInterface $item);
    public function get(string $key) : MultiplierInterface;
    public static function settings() : array;
}