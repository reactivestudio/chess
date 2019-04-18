<?php

namespace chess\multipliers\interfaces;


interface MultiplierInterface
{
    const DIRECT = 1;
    const REVERSE = -1;

    public function id() : string;
    public function length() : int;
    public function elementary() : int;
    public function direction() : array;
}