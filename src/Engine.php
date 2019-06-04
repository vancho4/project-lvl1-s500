<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const STEPSCOUNT = 3;

function engine($task, $getData)
{
    line('Welcome to the Brain Games!');
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 1; $i <= STEPSCOUNT; $i++) {
        [$question, $correctAnswer] = $getData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s"', $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
