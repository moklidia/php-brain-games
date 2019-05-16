<?php

namespace BrainGames\Games\Calc;

use function \cli\line;
use function BrainGames\Utils\getRandNum;
use function BrainGames\Games\Flow\playGame;

function playCalc()
{
    $task = 'What is the result of the expression?';
    $gameRules = function () {
        $operators = ['+', '-', '*'];
        $num1 = getRandNum();
        $num2 = getRandNum();
        $operator = $operators[getRandOperator($operators)];
        $question = "Question: {$num1} {$operator} {$num2}";
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
        $rules['question'] = $question;
        $rules['correct_answer'] = $correctAnswer;
        return $rules;
    };
    return playGame($task, $gameRules);
}

function getRandOperator($operators)
{
    return array_rand($operators);
}
