<?php

namespace BrainGames\Calc;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('What is the result of the expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $counter = 0;
    for ($i = 1; $i <= 3; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operator = ['*','+','-'];
        $randOperator = $operator[array_rand($operator)];
        switch($randOperator){
            case '*':
                $value = $number1 * $number2;
                break;
            case '+':
                $value = $number1 + $number2;
                break;
            case '-':
                $value = $number1 - $number2;
                break;
        }
        line("Question: %s", "{$number1} {$randOperator} {$number2}");
        $answer = prompt('Your answer');
        if ($answer == $value) {
            line('Correct!');
            $counter++;
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s"', $answer, $value);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($counter === 3) {
        line("Congratulations, %s!", $name);
    }
}
