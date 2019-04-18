<?php

namespace chess\multipliers\type;


use chess\multipliers\abstracts\AbstractMultiplier;

class All extends AbstractMultiplier
{
    protected $elementary = 1;
    protected $length = 7;
    protected $direction = [self::DIRECT, self::REVERSE];
}