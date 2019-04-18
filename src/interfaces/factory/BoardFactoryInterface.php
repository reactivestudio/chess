<?php

namespace chess\interfaces\factory;


use chess\interfaces\board\BoardInterface;

interface BoardFactoryInterface
{
    public function build() : BoardInterface;
}