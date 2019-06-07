<?php

namespace BrainGames\progression;

use function \BrainGames\engine\engine;

const TASK = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function getProgression($startNumber, $progressionStep, $length)
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $startNumber + $progressionStep * $i;
    }
    return $result;
}

function run()
{
    $getData = function () {
        $startNumber = rand(1, 100);
        $progressionStep = rand(2, 10);
        $progression = getProgression($startNumber, $progressionStep, PROGRESSION_LENGTH);
        $hiddenPosition = rand(0, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$hiddenPosition];
        $progression[$hiddenPosition] = '..';
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
