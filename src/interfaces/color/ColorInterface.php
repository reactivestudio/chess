<?php

namespace chess\interfaces\color;


interface ColorInterface
{
    const WHITE = 'white';
    const BLACK = 'black';
    const NAMES = [
        self::WHITE,
        self::BLACK,
    ];

    public function __construct(string $id);
    public function getId() : string;
}