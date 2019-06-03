<?php

namespace BrainGames\Prime;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function run()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    function getPrime($number)
    {
        for ($j = 2; $j <= $number / 2; $j++) {
            if ($number % $j == 0) {
                return 'no';
            }
        }
        return 'yes';
    }
    $getData = function () {
        $number = rand(1, 100);
        $corrAnswer = getPrime($number);
        return [$number, $corrAnswer];
    };
    engine($task, $getData);
}
