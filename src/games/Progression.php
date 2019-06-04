<?php

namespace BrainGames\Progression;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

const TASK = 'What number is missing in the progression?';
const PROGRESSION_LENGTH_NUMBERS = 10;
const PROGRESSION_STEP = 2;

function run()
{
    $getData = function () {
        $startProgression = rand(1, 100);
        $result = [];
        for ($i = 0; $i < PROGRESSION_LENGTH_NUMBERS; $i++) {
            $result[] = $startProgression + PROGRESSION_STEP * $i;
        }
        $randomDots = rand(0, PROGRESSION_LENGTH_NUMBERS - 1);
        $correctAnswer = $result[$randomDots];
        $result[$randomDots] = '..';
        $question = implode(' ', $result);
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
