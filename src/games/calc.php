<?php

namespace BrainGames\games\calc;

use function BrainGames\flow\playGame;

const TASK = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function playCalc()
{
    $generateGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = calculate($num1, $num2, $operator);
        return [$question, $correctAnswer];
    };
    return playGame(TASK, $generateGameData);
}

function calculate($num1, $num2, $operator)
{
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
    return $correctAnswer;
}
