<?php

namespace chess\vector\interfaces;


interface VectorCollectionInterface
{
    public function add(VectorInterface $item);
    public function get(string $key) : VectorInterface;
    public static function settings() : array;
}