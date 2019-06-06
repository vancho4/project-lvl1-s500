<?php

namespace BrainGames\calc;

use function \BrainGames\engine\engine;

const TASK = 'What is the result of the expression?';
const OPERATORS = ['*','+','-'];

function run()
{
    $getData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $randomOperator = OPERATORS[array_rand(OPERATORS)];
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
