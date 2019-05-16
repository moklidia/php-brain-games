<?php

namespace BrainGames\Games\Flow;

use function \cli\line;

function playGame(string $task, callable $getRules)
{
    line('Welcome to the Brain Game!');
    line('%s', $task);
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);

    $rounds = 3;

    for ($currRound = 1; $currRound <= $rounds; $currRound++) {
        $rules = $getRules();
        $question = "Question: {$rules['question']}";
        $userAnswer = \cli\prompt($question);
        $correctAnswer = $rules['correct_answer'];
        if ($userAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            print_r("'{$userAnswer}' is wrong asnwer ;(. Correct answer was '{$correctAnswer}'.");
            print_r(" Lets' try again, {$name}!");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
