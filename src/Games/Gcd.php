<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Utils\getRandNum;

use function BrainGames\Flow\playGame;

function findGcd($num1, $num2)
{
    return gmp_gcd($num1, $num2);
}

function playGcd()
{
    $task = 'Find the greatest common divisor of given numbers.';
    $gameRules = function () {
        $num1 = getRandNum();
        $num2 = getRandNum();
        $question = "Question: {$num1} {$num2}";
        $correctAnswer = findGcd($num1, $num2);
        $rules['question'] = $question;
        $rules['correct_answer'] = $correctAnswer;
        return $rules;
    };
    return playGame($task, $gameRules);
}
