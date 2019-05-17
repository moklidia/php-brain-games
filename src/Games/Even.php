<?php

namespace BrainGames\Games\even;

use function BrainGames\Flow\playGame;

const TASK = 'Answer "yes" if number even, otherwise answer "no"';

function isEven($num)
{
    return $num % 2 === 0;
}

function playEven()
{
    $generateGameData = function () {
        $num = rand(1, 100);
        $question = "{$num}";
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        $rules[] = $question;
        $rules[] = $correctAnswer;
        return $rules;
    };
    return playGame(TASK, $generateGameData);
}
