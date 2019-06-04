<?php

namespace BrainGames\Gcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

const TASK = 'Find the greatest common divisor of given numbers.';

function getDividers($number)
{
    $result = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $result[] = $i;
        }
    }
    return $result;
}

function run()
{
    $gameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $dividersNumber1 = getDividers($number1);
        $dividersNumber2 = getDividers($number2);
        $dividersTwoNumbers = array_intersect($dividersNumber1, $dividersNumber2);
        $correctAnswer = max($dividersTwoNumbers);
        $question = "$number1 $number2";
        return [$question, $correctAnswer];
    };
    engine(TASK, $gameData);
}
