<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($urlPath === '/') {
    require_once __DIR__ . '/views/index.php';
} elseif ($urlPath === '/arcade') {
    require_once __DIR__ . '/views/categories/gameArcade.php';
} elseif ($urlPath === '/arcade/whack-a-mole') {
    require_once __DIR__ . '/views/games/whack-a-mole.php';
} elseif ($urlPath === '/arcade/frenzy-clicker') {
    require_once __DIR__ . '/views/games/clickPerSecond.php';
} elseif ($urlPath === '/arcade/flappy-bird') {
    require_once __DIR__ . '/views/games/flappyBird.php';
} elseif ($urlPath === '/mindgame') {
    require_once __DIR__ . '/views/categories/gameReflexion.php';
} elseif ($urlPath === '/education') {
    require_once __DIR__ . '/views/categories/gameEducation.php';
} elseif ($urlPath === '/what-to-do') {
    require_once __DIR__ . '/views/whatToDo.php';
} elseif ($urlPath === '/about-us') {
    require_once __DIR__ . '/views/aboutUs.php';
} else {
    var_dump($urlPath);
}