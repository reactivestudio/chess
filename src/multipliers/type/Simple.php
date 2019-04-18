<?php

namespace chess\multipliers\type;


use chess\multipliers\abstracts\AbstractMultiplier;

class Simple extends AbstractMultiplier
{
    protected $elementary = 1;
    protected $length = 1;
    protected $direction = [self::DIRECT];
}