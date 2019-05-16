<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Flow\playGame;
use function BrainGames\Utils\getRandNum;

function playProgression()
{
    $task = 'What number is missing in the progression?';

    $gameRules = function () {
        $progression = createProgression();
        $missingKey = getRandKey($progression);
        $correctAnswer = $progression[$missingKey];
        $progression[$missingKey] = '..';
        $task = implode(' ', $progression);
        $question = "Question: {$task}";
        $rules['question'] = $question;
        $rules['correct_answer'] = $correctAnswer;
        return $rules;
    };
    return playGame($task, $gameRules);
}

function createProgression()
{
    $length = 10;
    $start = rand(1, 100);
    $step = rand(1, 10);
    $progression = [$start];
    for ($i = 1; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function getRandKey($array)
{
    return array_rand($array);
}
