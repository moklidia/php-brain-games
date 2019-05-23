<?php

namespace BrainGames\games\even;

use function BrainGames\flow\playGame;

const TASK = 'Answer "yes" if number even, otherwise answer "no"';

function isEven($num)
{
    return $num % 2 === 0;
}

function playEven()
{
    $generateGameData = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    return playGame(TASK, $generateGameData);
}
