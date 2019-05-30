<?php

namespace BrainGames\Prime;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    function getPrime($number)
    {
        for ($j = 2; $j <= $number / 2; $j++) {
            if ($number % $j == 0) {
                return 'no';
             }
        }
        return 'yes';
    }
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = prompt('Your answer');
        $corrAnswer = getPrime($number);
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
