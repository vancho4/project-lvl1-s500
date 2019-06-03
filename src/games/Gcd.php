<?php

namespace BrainGames\Gcd;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function run()
{
    $task = 'Find the greatest common divisor of given numbers.';
    function getDividers($number)
    {
        $result = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $result[] = $i;
            }
        }
        return $result;
    }
    $gameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $arrayDividersNumber1 = getDividers($number1);
        $arrayDividersNumber2 = getDividers($number2);
        foreach ($arrayDividersNumber1 as $key => $value) {
            foreach ($arrayDividersNumber2 as $key2 => $value2) {
                if ($arrayDividersNumber1[$key] == $arrayDividersNumber2[$key2]) {
                    $corrAnswer = $value;
                }
            }
        }
        $question = "{$number1} {$number2}";
        return [$question, $corrAnswer];
    };
    engine($task, $gameData);
}
