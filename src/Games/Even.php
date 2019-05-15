<?php

namespace BrainGames\Games\Even;

use function \cli\line;
use function BrainGames\Utils\getRandNum;
use function BrainGames\Utils\isEven;

function playEven()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);

    $rounds = 3;
    for ($currRound = 1; $currRound <= $rounds; $currRound++) {
        $num = getRandNum();
        $question = "Question: {$num}";
        $userAnswer = \cli\prompt($question);
        $correctAnswer = isEven($num) ? 'yes' : 'no';
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
