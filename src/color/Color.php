<?php

namespace chess\color;


use chess\interfaces\color\ColorInterface;

class Color implements ColorInterface
{
    private $id;

    public function __construct(string $id)
    {
        if (!in_array($id, ColorInterface::NAMES)) {
            throw new \InvalidArgumentException("$id is invalid color name in ColorInterface.");
        }

        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}