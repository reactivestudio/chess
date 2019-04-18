<?php

namespace chess\interfaces\collection;


use chess\interfaces\figure\FigureInterface;

interface FigureCollectionInterface extends CollectionInterface
{
    public function add(FigureInterface $item);
    public function get($key) : FigureInterface;
}