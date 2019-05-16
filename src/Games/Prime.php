<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Utils\getRandNum;

use function BrainGames\Flow\playGame;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function playPrime()
{
    $task = 'Answer "yes" if number prime. Otherwise answer "no"';
    $gameRules = function () {
        $num = getRandNum();
        $question = "Question: {$num}";
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $rules['question'] = $question;
        $rules['correct_answer'] = $correctAnswer;
        return $rules;
    };
    return playGame($task, $gameRules);
}
