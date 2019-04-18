<?php

namespace chess\interfaces\collection;


use chess\interfaces\color\ColorInterface;

interface ColorCollectionInterface extends CollectionInterface
{
    const COLOR_WHITE = 'white';
    const COLOR_BLACK = 'black';

    public function add(ColorInterface $item);
    public function get($key) : ColorInterface;
}