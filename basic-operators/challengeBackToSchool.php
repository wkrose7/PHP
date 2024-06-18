<?php

// Challenge: Back to school ??

// Calculate Area of a Rectangle given the length and Height

$length = 10;

$width = 5;

$area = $length * $width;

echo "Rectangle = " . $area . ".";

echo "<br>";

// Calculate Height of a Trianlge given the Base and Height

$base = 12;

$height = 3;

$triangle = ($base * $height) / 2;

echo "Triangle = " . $triangle . ".";

echo "<br>";

// Calculate area of a circle

$pi = 3.14;

$radius = 5;

$circle = pi() * pow($radius, 2);

echo "Area of circle = " . $circle . ".";

echo "<br>";

// Calculate the area of a trapezoid

$sideA = 10;

$sideB = 8;

$heightT = 4;

$trapazoidArea = ($sideA + $sideB) * ($heightT / 2);

echo "The area of a Trapazoid - " . $trapazoidArea . ".";