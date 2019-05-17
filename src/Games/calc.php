<?php

namespace BrainGames\Games\calc;

use function BrainGames\Flow\playGame;

const TASK = 'What is the result of the expression?';

const OPERATORS = ['+', '-', '*'];

function playCalc()
{
    $generateGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = 0;
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
        $gameData[] = $question;
        $gameData[] = $correctAnswer;
        return $gameData;
    };
    return playGame(TASK, $generateGameData);
}
