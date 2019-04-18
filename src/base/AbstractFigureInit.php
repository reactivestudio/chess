<?php

namespace chess\base;


use chess\interfaces\color\ColorInterface;
use chess\interfaces\figure\FigureInitInterface;

abstract class AbstractFigureInit implements FigureInitInterface
{
    protected $initial;

    abstract protected function white();
    abstract protected function black();

    public function __construct()
    {
        $this->initial = [
            ColorInterface::WHITE => $this->white(),
            ColorInterface::BLACK => $this->black(),
        ];
    }

    public function settings() : array
    {
        return $this->initial;
    }
}