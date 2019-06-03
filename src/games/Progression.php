<?php

namespace BrainGames\Progression;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function run()
{
    $task = 'What number is missing in the progression?';
    $getData = function() {
        $startProgression = rand(1, 100);
        $result = [];
        for ($i = $startProgression; $i <= $startProgression + 18; $i += 2) {
            $result[] = $i;
        }
        $randDots = rand(0, 9);
        $corrAnswer = $result[$randDots];
        $result[$randDots] = '..';
        $question = implode(' ', $result);
        return [$question, $corrAnswer];
    };
    engine($task, $getData);
}