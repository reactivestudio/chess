<?php

namespace chess\interfaces\figure;


use chess\interfaces\color\ColorInterface;
use chess\interfaces\position\PositionInterface;
use chess\move\interfaces\MoveCollectionInterface;

interface FigureInterface
{

    public function __construct(
        int $type,
        ColorInterface $color,
        MoveCollectionInterface $moves
    );
    public function color() : ColorInterface;
    public function position() : PositionInterface;
    public function moves() : MoveCollectionInterface;
    public function setPosition(PositionInterface $position);
    public function getId() : string;
    public function type() : string;
    public function name() : string;
    public function short() : string;
    public function unicode() : string;
    public function cost() : int;
    public function wasMoved() : bool;
}