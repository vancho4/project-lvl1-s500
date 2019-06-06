<?php

namespace BrainGames\calc;

use function \BrainGames\engine\engine;

const TASK = 'What is the result of the expression?';
const OPERATORS = ['*','+','-'];

function getResultExpression($number1, $number2, $operator)
{
    switch ($operator) {
        case '*':
            $result = $number1 * $number2;
            break;
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
    }
    return $result;
}

function run()
{
    $getData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $randomOperator = OPERATORS[array_rand(OPERATORS)];
        $question = "$number1 $randomOperator $number2";
        $correctAnswer = getResultExpression($number1, $number2, $randomOperator);
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
