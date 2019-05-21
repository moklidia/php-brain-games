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
        $questionData = rand(1, 100);
        $correctAnswer = isEven($questionData) ? 'yes' : 'no';
        return [$questionData, $correctAnswer];
    };
    return playGame(TASK, $generateGameData);
}
