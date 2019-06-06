<?php

namespace BrainGames\gcd;

use function \BrainGames\engine\engine;

const TASK = 'Find the greatest common divisor of given numbers.';

function getGcd($number1, $number2)
{
    $minimumNumber = min($number1, $number2);
    $divider = 1;
    for ($i = 2; $i <= $minimumNumber; $i++) {
        if ($number1 % $i === 0 && $number2 % $i === 0) {
            $divider = $i;
        }
    }
    return $divider;
}

function run()
{
    $gameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $correctAnswer = getGcd($number1, $number2);
        $question = "$number1 $number2";
        return [$question, $correctAnswer];
    };
    engine(TASK, $gameData);
}
