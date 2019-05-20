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
        if ($number % 2 == 0 && $answer == 'yes') {
	    line('Correct!');
            $counter++;
        } elseif ($number % 2 == 0 && $answer !== 'yes') {
	    line('"%s" is wrong answer ;(. Correct answer was "yes"', $answer);
	    line("Let's try again, %s!", $name);
	    break;
        } elseif ($number % 2 !== 0 && $answer == 'no') {
	    line('Correct!');
	    $counter++;
        } else {
	    line('"%s" is wrong answer ;(. Correct answer was "no"', $answer);
	    line("Let's try again, %s!", $name);
	    break;
	}
    }    
    if ($counter == 3) {
        return line("Congratulations, %s!", $name);
    }
} 
