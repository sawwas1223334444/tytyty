<?php

function isArithmeticProgression($a, $b, $c) {

    return ($b - $a) === ($c - $b);
}


$a = 5;
$b = 10;
$c = 15;


if (isArithmeticProgression($a, $b, $c)) {
    echo "Числа $a, $b, $c являются последовательными членами арифметической прогрессии.";
} else {
    echo "Числа $a, $b, $c не являются последовательными членами арифметической прогрессии.";
}
