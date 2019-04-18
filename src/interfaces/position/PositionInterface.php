<?php

namespace chess\interfaces\position;


use chess\interfaces\figure\FigureInterface;

interface PositionInterface
{
    public function __construct(int $x, int $y);
    public function __toString() : string;
    public function getX() : int;
    public function getY() : int;
    public function getId() : string;
    public function attachFigure(FigureInterface $figure);
    public function clearFigure();
    public function getFigureId() : string;
    public function isFree() : bool;
}