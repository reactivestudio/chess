<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use chess\game\builder\ClassicGameBuilder;
use chess\game\GameDirector;

/**
 * Classic chess game init
 */
$builder = new ClassicGameBuilder();
$director = new GameDirector();
$game = $director->build($builder);

/**
 * Debug game state via Kint::dump()
 */
+d($game);
echo $game->board() . "<br>";

/**
 * Some game process
 */
$game->manager()->move([5, 7], [5, 5]);
$game->manager()->move([5, 2], [5, 4]);
//$game->manager()->move([4, 4], [5, 5]);
//$game->manager()->move([6, 1], [2, 5]);
//$game->manager()->move([4, 7], [4, 6]);
//$game->manager()->move([4, 1], [6, 3]);

echo $game->board() . "<br>";