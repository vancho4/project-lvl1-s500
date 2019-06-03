<?php

namespace BrainGames\Calc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function run()
{
    $task = 'What is the result of the expression?';
    $getData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operator = ['*','+','-'];
        $randOperator = $operator[array_rand($operator)];
        switch ($randOperator) {
            case '*':
                $corrAnswer = $number1 * $number2;
                break;
            case '+':
                $corrAnswer = $number1 + $number2;
                break;
            case '-':
                $corrAnswer = $number1 - $number2;
                break;
        }
        $question = "{$number1} {$randOperator} {$number2}";
        return [$question, $corrAnswer];
    };
    engine($task, $getData);
}
