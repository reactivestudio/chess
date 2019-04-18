<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class Knight extends AbstractFigure
{
    const COST = 100;
    const NAME = 'Knight';
    const SHORT = 'N';
    const UNICODE_WHITE = '♘';
    const UNICODE_BLACK = '♞';
}