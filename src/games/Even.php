<?php

namespace BrainGames\even;

use function \BrainGames\engine\engine;

const TASK = 'Answer "yes" if number even otherwise answer "no"';

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getData = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? "yes" : "no";
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
