<?php

namespace chess\vector\factory;


use chess\vector\abstracts\AbstractVectorCollectionFactory;
use chess\vector\collection\VectorCollection;
use chess\vector\interfaces\VectorCollectionInterface;
use chess\vector\interfaces\VectorFactoryInterface;

class VectorCollectionFactory extends AbstractVectorCollectionFactory
{
    public function __construct(VectorFactoryInterface $factory)
    {
        parent::__construct($factory);
        $this->vectors = new VectorCollection();
    }

    /**
     * @param array $classes
     * @return VectorCollectionInterface
     * @throws \chess\exceptions\KeyHasUseException
     */
    public function build() : VectorCollectionInterface
    {
        foreach ($this->vectors::settings() as $class) {
            $this->vectors->add($this->factory->build($class));
        }

        return $this->vectors;
    }
}