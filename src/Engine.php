<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function engine($task, $getData)
{
    line('Welcome to the Brain Games!');
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        [$question, $corrAnswer] = $getData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($answer == $corrAnswer) {
            line('Correct!');
            $counter++;
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s"', $answer, $corrAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($counter === 3) {
        line("Congratulations, %s!", $name);
    }
}
