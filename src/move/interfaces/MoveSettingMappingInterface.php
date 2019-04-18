<?php

namespace chess\move\interfaces;


interface MoveSettingMappingInterface
{
    public function getSettingClass(int $figureType) : string;
}