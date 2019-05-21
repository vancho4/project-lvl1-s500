<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no"');
    line('');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('');
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = prompt('Your answer');
        if ($number % 2 === 0) {
            $corrAnswer = 'yes';
        } else {
            $corrAnswer = 'no';
        }
        if ($answer === $corrAnswer) {
            line('Correcr!');
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
