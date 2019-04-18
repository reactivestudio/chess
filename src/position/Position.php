<?php

namespace chess\position;


use chess\interfaces\figure\FigureInterface;
use chess\interfaces\position\PositionInterface;

class Position implements PositionInterface
{
    private $x;
    private $y;
    private $figureId;

    protected static $instance = [];

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getId() : string
    {
        return self::getKey($this->getX(), $this->getY());
    }

    public static function getKey(int $x, int $y): string
    {
        return $x . $y;
    }

    public function getX() : int
    {
        return $this->x;
    }

    public function getY() : int
    {
        return $this->y;
    }

    public function __toString() : string
    {
        return ucfirst(chr(96 + $this->x)) . $this->y;
    }

    public function attachFigure(FigureInterface $figure)
    {
        $this->figureId = $figure->getId();
    }

    public function clearFigure()
    {
        $this->figureId = null;
    }

    public function getFigureId(): string
    {
        return $this->figureId;
    }

    public function isFree(): bool
    {
        return empty($this->figureId);
    }
}