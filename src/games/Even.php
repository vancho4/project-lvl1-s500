<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function run() 
{
    $task = 'Answer "yes" if number even otherwise answer "no"';
    $getData = function () {
        $number = rand(1, 100);
        ($number % 2 === 0) ? $corrAnswer = 'yes' : $corrAnswer = 'no';
        return [$number, $corrAnswer];
    };
    engine($task, $getData);
}
