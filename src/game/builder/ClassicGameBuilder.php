<?php

namespace chess\game\builder;


use chess\color\factory\ColorCollectionFactory;
use chess\color\factory\ColorFactory;
use chess\board\factory\BoardFactory;
use chess\figure\factory\FigureCollectionFactory;
use chess\figure\factory\FigureFactory;
use chess\figure\FigureTypeMapping;
use chess\game\ClassicGame;
use chess\game\interfaces\GameBuilderInterface;
use chess\game\interfaces\GameInterface;
use chess\move\factory\MoveCollectionFactory;
use chess\move\factory\MoveFactory;
use chess\move\MoveSettingMapping;
use chess\multipliers\factory\MultiplierCollectionFactory;
use chess\multipliers\factory\MultiplierFactory;
use chess\position\factory\PositionCollectionFactory;
use chess\position\factory\PositionFactory;
use chess\service\MoveManager;
use chess\vector\factory\VectorCollectionFactory;
use chess\vector\factory\VectorFactory;

class ClassicGameBuilder implements GameBuilderInterface
{
    /**
     * @var GameInterface
     */
    private $game;

    public function createGame()
    {
        $this->game = new ClassicGame();
    }

    public function getGame() : GameInterface
    {
        return $this->game;
    }

    public function addBoard()
    {
        $factory = new BoardFactory();
        $this->game->setBoard($factory->build());
    }

    /**
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function addElementaryVectors()
    {
        $vectorFactory = new VectorFactory();
        $vectorCollectionFactory = new VectorCollectionFactory($vectorFactory);

        $this->game->setElementaryVectors($vectorCollectionFactory->build());
    }

    /**
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function addMultipliers()
    {
        $multiplierFactory = new MultiplierFactory();
        $multiplierCollectionFactory = new MultiplierCollectionFactory($multiplierFactory);

        $this->game->setMultipliers($multiplierCollectionFactory->build());
    }

    /**
     * @throws \chess\exceptions\ColorCollectionIsFullException
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function addColors()
    {
        $colorFactory = new ColorFactory();
        $collectionFactory = new ColorCollectionFactory($colorFactory);
        $this->game->setColors($collectionFactory->build());
    }

    /**
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function addPositions()
    {
        $positionFactory = new PositionFactory();
        $collectionFactory = new PositionCollectionFactory($positionFactory);

        $positions = $collectionFactory->build($this->game->board()->size());
        $this->game->board()->setPositions($positions);
    }

    /**
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function addFigures()
    {
        $positions = $this->game->board()->positions();
        $colors = $this->game->colors();

        $figureTypeMapping = new FigureTypeMapping();
        $moveSettingMapper = new MoveSettingMapping();

        $moveFactory = new MoveFactory();
        $moveCollectionFactory = new MoveCollectionFactory(
            $moveFactory,
            $moveSettingMapper,
            $this->game->multipliers(),
            $this->game->elementary()
        );
        $figureFactory = new FigureFactory($moveCollectionFactory, $positions, $figureTypeMapping);
        $collectionFactory = new FigureCollectionFactory($figureFactory, $colors, $positions);

        $figures = $collectionFactory->build();
        $this->game->board()->setFigures($figures);
    }

    public function addMoveManager()
    {
        $manager = new MoveManager($this->game->board());
        $this->game->setMoveManager($manager);
    }

}