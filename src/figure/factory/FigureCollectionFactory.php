<?php

namespace chess\figure\factory;


use chess\figure\collection\FigureCollection;
use chess\figure\FigureType;
use chess\figure\init\{
    Bishop, King, Knight, Pawn, Queen, Rook
};
use chess\interfaces\collection\ColorCollectionInterface;
use chess\interfaces\collection\FigureCollectionInterface;
use chess\interfaces\collection\PositionCollectionInterface;
use chess\interfaces\factory\FigureCollectionFactoryInterface;
use chess\interfaces\factory\FigureFactoryInterface;
use chess\interfaces\figure\FigureInitInterface;

class FigureCollectionFactory implements FigureCollectionFactoryInterface
{
    private $factory;
    private $colors;
    private $positions;
    private $figures;

    public function __construct(
        FigureFactoryInterface $factory,
        ColorCollectionInterface $colors,
        PositionCollectionInterface $positions
    )
    {
        $this->factory = $factory;
        $this->colors = $colors;
        $this->positions = $positions;
        $this->figures = new FigureCollection();
    }

    /**
     * @return FigureCollectionInterface
     * @throws \chess\exceptions\KeyHasUseException
     * @throws \chess\exceptions\KeyInvalidException
     */
    public function build() : FigureCollectionInterface
    {
        $this->buildType(new King(), FigureType::KING);
        $this->buildType(new Queen(), FigureType::QUEEN);
        $this->buildType(new Rook(), FigureType::ROOK);
        $this->buildType(new Bishop(), FigureType::BISHOP);
        $this->buildType(new Knight(), FigureType::KNIGHT);
        $this->buildType(new Pawn(), FigureType::PAWN);

        return $this->figures;
    }

    /**
     * @param FigureInitInterface $init
     * @param string $type
     * @throws \chess\exceptions\KeyHasUseException
     * @throws \chess\exceptions\KeyInvalidException
     */
    private function buildType(FigureInitInterface $init, string $type)
    {
        foreach ($init->settings() as $colorId => $places) {
            foreach ($places as list($x, $y)) {
                $color = $this->colors->get($colorId);
                $position = $this->positions->get($x, $y);

                $figure = $this->factory->build($type, $color, $position);
                $this->figures->add($figure);
            }
        }
    }
}