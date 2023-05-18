<?php

include('TennisGame.php');

$tennisGame = new TennisGame('Hà', 'Lan', 3, 1);

echo $tennisGame->getScore() . '<br>';
echo $tennisGame->playerOneName . '-' . $tennisGame->playerTwoName;