<?php 
function determineTriangleType($a, $b, $c) {

    if ($a === $b && $b === $c) {
        return "Равносторонний треугольник";
    }

    if ($a === $b || $a === $c || $b === $c) {
        return "Равнобедренный треугольник";
    }
        return "Не треугольник";
}

$a = 4;
$b = 6;
$c = 6;

$triangleType = determineTriangleType($a, $b, $c);

echo "Треугольник со сторонами $a, $b, $c — это $triangleType.";
