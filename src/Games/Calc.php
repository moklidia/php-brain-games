<?php

namespace BrainGames\Games\Calc;

use function \cli\line;
use function BrainGames\Utils\getRandNum;

function playCalc()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);

    $rounds = 3;
    $operators = ['+', '-', '*'];

    for ($currRound = 1; $currRound <= $rounds; $currRound++) {
        $num1 = getRandNum();
        $num2 = getRandNum();
        $operator = $operators[getRandOperator($operators)];
        $question = "Question: {$num1} {$operator} {$num2}";
        $userAnswer = \cli\prompt($question);
        //finds correct answer depending on operator
        switch ($operator) {
            case '+':
                $correctAnswer = $num1 + $num2;
                break;
            case '-':
                $correctAnswer = $num1 - $num2;
                break;
            case '*':
                $correctAnswer = $num1 * $num2;
        }

        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            print_r("'{$userAnswer}' is wrong asnwer ;(. Correct answer was '{$correctAnswer}'.");
            print_r(" Lets' try again, {$name}!");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function getRandOperator($operators)
{
    return array_rand($operators);
}
