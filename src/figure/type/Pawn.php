<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class Pawn extends AbstractFigure
{
    const COST = 100;
    const NAME = 'Pawn';
    const SHORT = 'P';
    const UNICODE_WHITE = '♙';
    const UNICODE_BLACK = '♙';
}