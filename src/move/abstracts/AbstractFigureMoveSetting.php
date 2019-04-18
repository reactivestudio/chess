<?php

namespace chess\move\abstracts;


use chess\move\interfaces\FigureMoveSettingInterface;

abstract class AbstractFigureMoveSetting implements FigureMoveSettingInterface
{
    abstract public function rules() : array;
}