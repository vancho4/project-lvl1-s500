<?php

namespace BrainGames\Calc;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

const TASK = 'What is the result of the expression?';

function run()
{
    $getData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operators = ['*','+','-'];
        $randomOperator = $operators[array_rand($operators)];
        switch ($randomOperator) {
            case '*':
                $correctAnswer = $number1 * $number2;
                break;
            case '+':
                $correctAnswer = $number1 + $number2;
                break;
            case '-':
                $correctAnswer = $number1 - $number2;
                break;
        }
        $question = "$number1 $randomOperator $number2";
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
