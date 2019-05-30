<?php

namespace BrainGames\Gcd;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('Find the greatest common divisor of given numbers.');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    function getDividers ($number) {
        $result = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
            $result[] = $i;
            }
        }
        return $result;
    }
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $arrayDividersNumber1 = getDividers($number1);
        $arrayDividersNumber2 = getDividers($number2); 
        foreach ($arrayDividersNumber1 as $key => $value) {
            foreach ($arrayDividersNumber2 as $key2 => $value2) {
                if ($arrayDividersNumber1[$key] == $arrayDividersNumber2[$key2]) {
                    $maxDivider = $value;
                }
            } 
        }
        line("Question: %s", "{$number1} {$number2}");
        $answer = prompt('Your answer');
        if ($answer == $maxDivider) {
            line('Correct!');
            $counter++;
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s"', $answer, $maxDivider);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($counter === 3) {
        line("Congratulations, %s!", $name);
    }
}
