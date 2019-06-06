<?php

namespace BrainGames\progression;

use function \BrainGames\engine\engine;

const TASK = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function getProgression($firstNumberProgression, $progressionStep)
{
    $result = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $result[] = $firstNumberProgression + $progressionStep * $i;
    }
    return $result;
}

function run()
{
    $getData = function () {
        $firstNumberProgression = rand(1, 100);
        $progressionStep = rand(2, 10);
        $progression = getProgression($firstNumberProgression, $progressionStep);
        $hiddenNumber = rand(0, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$hiddenNumber];
        $progression[$hiddenNumber] = '..';
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
