<?php

namespace chess\service;


use chess\exceptions\KeyInvalidException;
use chess\interfaces\board\BoardInterface;
use chess\interfaces\color\ColorInterface;
use chess\interfaces\position\PositionInterface;
use chess\interfaces\service\MoveManagerInterface;
use chess\move\interfaces\MoveInterface;
use chess\vector\interfaces\VectorInterface;

class MoveManager implements MoveManagerInterface
{
    private $board;

    public function __construct(BoardInterface $board)
    {
        $this->board = $board;
    }

    public function move(array $from, array $to) : bool
    {
        try {
            list($x, $y) = $from;
            $from = $this->board->positions()->get($x, $y);
            list($x, $y) = $to;
            $to = $this->board->positions()->get($x, $y);
        } catch (KeyInvalidException $exception) {
            return false;
        }


        if (!$this->canMove($from, $to)) {
            return false;
        }

        $figureFrom = $this->board->figures()->get($from->getFigureId());

        /**
         * FigureFrom eat figureTo
         */
        if (!$to->isFree()) {
            $this->board->figures()->delete($to->getFigureId());
        }

        /**
         * Change figureFrom position
         */
        $to->attachFigure($figureFrom);
        $from->clearFigure();

        return true;
    }

    public function canMove(PositionInterface $from, PositionInterface $to) : bool
    {
        if (
            0 === $to->getX() - $from->getX() &&
            0 === $to->getY() - $from->getY()
        ) {
            return false;
        }

        if ($from->isFree()) {
            return false;
        }

        $figureFrom = $this->board->figures()->get($from->getFigureId());
        $colorFrom = $figureFrom->color()->getId();

        if (!$to->isFree()) {
            $figureTo = $this->board->figures()->get($to->getFigureId());
            $colorTo = $figureTo->color()->getId();
        } else {
            $colorTo = null;
        }

        if ($colorFrom === $colorTo) {
            return false;
        }

        foreach ($figureFrom->moves() as $move) {
            /**
             * @var MoveInterface $move
             */
            $multiplier = $move->multiplier();
            $vector = $move->vector();
            if (
                ($move->mustEat() && $to->isFree()) ||
                (!$move->canEat() && !$to->isFree()) ||
                ($move->mustFirst() && $figureFrom->wasMoved())
            ) {
                continue;
            }
            foreach ($multiplier->direction() as $direction) {
                $position = $from;
                foreach (range(1, $multiplier->length()) as $i) {
                    $elementary = $vector::scalar($direction, $vector);
                    try {
                        $position = $this->getPosition($position, $elementary, $figureFrom->color());
                    } catch (KeyInvalidException $exception) {
                        break;
                    }

                    if ($position->getId() !== $to->getId()) {
                        if (!$position->isFree()) {
                            break;
                        }
                    } else {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * @param PositionInterface $from
     * @param VectorInterface $vector
     * @param ColorInterface $color
     * @return PositionInterface
     * @throws KeyInvalidException
     */
    private function getPosition(
        PositionInterface $from,
        VectorInterface $vector,
        ColorInterface $color
    ) : PositionInterface
    {
        $sign = (ColorInterface::WHITE === $color->getId()) ? 1 : -1;
        $x = $from->getX() + $sign * $vector->getX();
        $y = $from->getY() + $sign * $vector->getY();

        return $this->board->positions()->get($x, $y);
    }
}