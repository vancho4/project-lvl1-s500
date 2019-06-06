<?php

namespace BrainGames\prime;

use function \BrainGames\engine\engine;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getData = function () {
        $question = rand(1, 100);
        $correctAnswer = isPrime($question) ? "yes" : "no";
        return [$question, $correctAnswer];
    };
    engine(TASK, $getData);
}
