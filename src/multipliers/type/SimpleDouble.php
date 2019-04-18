<?php

namespace chess\multipliers\type;


use chess\multipliers\abstracts\AbstractMultiplier;

class SimpleDouble extends AbstractMultiplier
{
    protected $elementary = 1;
    protected $length = 2;
    protected $direction = [self::DIRECT];
}