<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class Rook extends AbstractFigure
{
    const COST = 100;
    const NAME = 'Rook';
    const SHORT = 'R';
    const UNICODE_WHITE = '♖';
    const UNICODE_BLACK = '♜';
}