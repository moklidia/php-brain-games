<?php

namespace BrainGames\flow;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function playGame(string $task, callable $generateGameData)
{
    line('Welcome to the Brain Game!');
    line('%s', $task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $generateGameData();
        $userAnswer = prompt("Question: {$question}");
        if ($userAnswer === strval($correctAnswer)) {
            line("Correct!");
        } else {
            print_r("'{$userAnswer}' is wrong asnwer ;(. Correct answer was '{$correctAnswer}'.");
            print_r("Lets' try again, {$name}!");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
