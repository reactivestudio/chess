<?php

namespace chess\base;


use chess\interfaces\color\ColorInterface;
use chess\interfaces\figure\FigureInterface;
use chess\interfaces\position\PositionInterface;
use chess\move\interfaces\MoveCollectionInterface;

abstract class AbstractFigure implements FigureInterface
{
    const COST = 0;
    const NAME = 'Figure';
    const SHORT = 'F';
    const UNICODE_WHITE = '';
    const UNICODE_BLACK = '';

    static private $lastId = 0;

    protected $id;
    protected $color;
    protected $type;
    protected $position;
    protected $wasMoved = false;
    /**
     * @var MoveCollectionInterface
     */
    protected $moves;

    public function __construct(
        int $type,
        ColorInterface $color,
        MoveCollectionInterface $moves
    )
    {
        $this->type = $type;
        $this->color = $color;
        $this->moves = $moves;
        $this->id = $this->id = ++self::$lastId;
    }

    public function getId() : string {
        return $this->id;
    }

    public function cost(): int
    {
        return static::COST;
    }

    public function name() : string
    {
        return static::NAME;
    }

    public function short() : string
    {
        return static::SHORT;
    }

    public function unicode(): string
    {
        return (ColorInterface::WHITE === $this->color->getId()) ? static::UNICODE_WHITE : static::UNICODE_BLACK;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function color() : ColorInterface {
        return $this->color;
    }

    public function position() : PositionInterface {
        return $this->position;
    }

    public function setPosition(PositionInterface $position)
    {
        $this->position = $position;
    }

    public function wasMoved() : bool
    {
        return $this->wasMoved;
    }

    public function setMoved()
    {
        return $this->wasMoved = true;
    }

    public function moves() : MoveCollectionInterface
    {
        return $this->moves;
    }
}