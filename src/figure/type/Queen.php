<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class Queen extends AbstractFigure
{
    const COST = 100;
    const NAME = 'Queen';
    const SHORT = 'Q';
    const UNICODE_WHITE = '♕';
    const UNICODE_BLACK = '♛';
}