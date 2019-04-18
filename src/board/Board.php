<?php

namespace chess\board;


use chess\interfaces\{
    board\BoardInterface,
    collection\FigureCollectionInterface,
    collection\PositionCollectionInterface
};

class Board implements BoardInterface
{
    /**
     * @var int|null $size
     */
    private $size;

    /**
     * @var PositionCollectionInterface
     */
    private $positions;

    /**
     * @var FigureCollectionInterface
     */
    private $figures;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function size() : int
    {
        return $this->size;
    }

    public function positions() : PositionCollectionInterface
    {
        return $this->positions;
    }

    public function figures() : FigureCollectionInterface
    {
        return $this->figures;
    }

    public function setPositions(PositionCollectionInterface $positions)
    {
        $this->positions = $positions;
    }

    public function setFigures(FigureCollectionInterface $figures)
    {
        $this->figures = $figures;
    }

    public function __toString() : string
    {
        $result = '';
        foreach (range(1, $this->size) as $y) {
            $y = $this->size + 1 - $y;
            foreach (range(1, $this->size) as $x) {
                $position = $this->positions->get($x, $y);
                if ($position->isFree()) {
                    $result .= " __ ";
                } else {
                    $figure = $this->figures->get($position->getFigureId());
                    $result .= " " . $figure->unicode() . " ";
                }
            }
            $result .= "<br>";
        }

        return $result;
    }
}