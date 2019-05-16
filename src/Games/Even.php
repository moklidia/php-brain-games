<?php

namespace BrainGames\Games\Even;

use function BrainGames\Utils\getRandNum;

use function BrainGames\Games\Flow\playGame;

function isEven($num)
{
    return $num % 2 === 0;
}

function playEven()
{
    $task = 'Answer "yes" if number even, otherwise answer "no"';
    $gameRules = function () {
        $num = getRandNum();
        $question = "Question: {$num}";
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        $rules['question'] = $question;
        $rules['correct_answer'] = $correctAnswer;
        return $rules;
    };
    playGame($task, $gameRules);
    return;
}
