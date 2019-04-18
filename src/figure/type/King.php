<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class King extends AbstractFigure
{
    const COST = 100;
    const NAME = 'King';
    const SHORT = 'K';
    const UNICODE_WHITE = '♔';
    const UNICODE_BLACK = '♚';
}