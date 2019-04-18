<?php

namespace chess\multipliers\factory;


use chess\multipliers\abstracts\AbstractMultiplierCollectionFactory;
use chess\multipliers\collection\MultiplierCollection;
use chess\multipliers\interfaces\MultiplierCollectionInterface;
use chess\multipliers\interfaces\MultiplierFactoryInterface;

class MultiplierCollectionFactory extends AbstractMultiplierCollectionFactory
{
    public function __construct(MultiplierFactoryInterface $factory)
    {
        parent::__construct($factory);
        $this->multipliers = new MultiplierCollection();
    }

    /**
     * @return MultiplierCollectionInterface
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function build() : MultiplierCollectionInterface
    {
        foreach ($this->multipliers::settings() as $class) {
            $this->multipliers->add($this->factory->build($class));
        }

        return $this->multipliers;
    }
}