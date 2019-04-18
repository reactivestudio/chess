<?php

namespace chess\figure\type;


use chess\base\AbstractFigure;

class Bishop extends AbstractFigure
{
    const COST = 100;
    const NAME = 'Bishop';
    const SHORT = 'B';
    const UNICODE_WHITE = '♗';
    const UNICODE_BLACK = '♝';
}