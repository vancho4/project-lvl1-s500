<?php

namespace BrainGames\gcd;

use function \BrainGames\engine\engine;

const TASK = 'Find the greatest common divisor of given numbers.';

function getGcd($a, $b)
{
    $minimumNumber = min($a, $b);
    $divider = 1;
    for ($i = 2; $i <= $minimumNumber; $i++) {
        if ($a % $i === 0 && $b % $i === 0) {
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
