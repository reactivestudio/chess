<?php

namespace chess\figure\interfaces;


interface FigureTypeMappingInterface
{
    public function getFigureTypeClass(int $type) : string;
}