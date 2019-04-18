<?php

namespace chess\vector\interfaces;


interface BasisVectorInterface
{
    public function getX() : int;
    public function getY() : int;
    public function getValue() : array;
}