<?php

namespace BrainGames\Progression;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('What number is missing in the progression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        $startProgression = rand(1,100);
        $result = [];
        $stringQuestion = '';
        for ($j = $startProgression; $j <= $startProgression + 18; $j += 2) {
            $result[] = $j;
        }
        $randDots = rand(0,9);
        $corrAnswer = $result[$randDots];
        $result[$randDots] = '..';
        $stringQuestion = implode(' ', $result);
        line("Question: %s", $stringQuestion);
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
