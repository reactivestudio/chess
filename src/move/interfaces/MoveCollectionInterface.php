<?php

namespace chess\move\interfaces;


use chess\interfaces\collection\CollectionInterface;

interface MoveCollectionInterface extends CollectionInterface
{
    public function add(MoveInterface $item);
    public function get(int $key) : MoveInterface;
}