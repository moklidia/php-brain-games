<?php

namespace BrainGames\Games\progression;

use function BrainGames\Flow\playGame;

const TASK = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function playProgression()
{
    $generateGameData = function () {
        $progression = [];
        $start = rand(1, 100);
        $step = rand(1, 10);
        for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
            $progression[] = $start + $i * $step;
        }
        $missingKey = array_rand($progression);
        $correctAnswer = $progression[$missingKey];
        $progression[$missingKey] = '..';
        $task = implode(' ', $progression);
        $question = "{$task}";
        $gameData[] = $question;
        $gameData[] = $correctAnswer;
        return $gameData;
    };
    return playGame(TASK, $generateGameData);
}
