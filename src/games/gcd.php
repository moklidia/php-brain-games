<?php

namespace BrainGames\games\gcd;

use function BrainGames\flow\playGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function findGcd($num1, $num2)
{
    return gmp_gcd($num1, $num2);
}

function playGcd()
{
    $generateGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $correctAnswer = findGcd($num1, $num2);
        return [$question, $correctAnswer];
    };
    return playGame(TASK, $generateGameData);
}
