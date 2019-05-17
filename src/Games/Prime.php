<?php

namespace BrainGames\Games\prime;

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
        $num = rand(1, 100);
        $question = "{$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $gameData[] = $question;
        $gameData[] = $correctAnswer;
        return $gameData;
    };
    return playGame(TASK, $generateGameData);
}
