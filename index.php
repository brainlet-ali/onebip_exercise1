<?php

include_once(__DIR__ . "/vendor/autoload.php");

use App\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($i = 1; $i <= 20; $i++) {
    echo $fizzBuzz->print($i) . '<br/>';
}
