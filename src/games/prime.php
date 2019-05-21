<?php

namespace BrainGames\games\prime;

use function BrainGames\flow\playGame;

const TASK = 'Answer "yes" if number prime. Otherwise answer "no"';

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function playPrime()
{
    $generateGameData = function () {
        $questionData = rand(1, 100);
        $correctAnswer = isPrime($questionData) ? 'yes' : 'no';
        return [$questionData, $correctAnswer];
    };
    return playGame(TASK, $generateGameData);
}
