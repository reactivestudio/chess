<?php

namespace chess\move\factory;


use chess\move\abstracts\AbstractMoveCollectionFactory;
use chess\move\interfaces\FigureMoveSettingInterface;
use chess\move\interfaces\MoveCollectionInterface;
use chess\move\interfaces\MoveFactoryInterface;
use chess\move\interfaces\MoveSettingMappingInterface;
use chess\move\MoveCollection;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\vector\interfaces\VectorCollectionInterface;

class MoveCollectionFactory extends AbstractMoveCollectionFactory
{
    public function __construct(
        MoveFactoryInterface $factory,
        MoveSettingMappingInterface $mapping,
        MultiplierCollectionInterface $multipliers,
        VectorCollectionInterface $elementary
    )
    {
        parent::__construct($factory, $mapping, $multipliers, $elementary);
        $this->collection = new MoveCollection();
    }

    /**
     * @param int $figureType
     * @return MoveCollectionInterface
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function build(int $figureType) : MoveCollectionInterface
    {
        $this->collection = new MoveCollection();

        $class = $this->mapping->getSettingClass($figureType);
        if (!$class) {
            throw new \InvalidArgumentException("Can not build figure move of unknown type: $figureType");
        }
        $setting = new $class();
        if (!$setting instanceof FigureMoveSettingInterface) {
            throw new \InvalidArgumentException("Can not build figure move of unknown type: $figureType");
        }

        foreach ($setting->rules() as $rule) {
            list($multiplier, $vector, $eat, $castling, $first) = $rule;

            $multiplier = $this->multipliers->get($multiplier);
            $vector = $this->elementary->get($vector);

            $move = $this->factory->build($multiplier, $vector, $eat, $castling, $first);
            $this->collection->add($move);
        }

        return $this->collection;
    }
}