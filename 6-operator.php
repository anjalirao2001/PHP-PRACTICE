<?php

// operator
echo "Operator";
echo "<br>";

// Arithmetic Operator
$x = 10;
$y = 20;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";


// Assignment
$num = 20;
echo $num;
echo "<br>";

$num +=2;
echo $num;
echo "<br>";

$num -=2;
echo $num;
echo "<br>";

$num *=2;
echo $num;
echo "<br>";

$num /=2;
echo $num;
echo "<br>";

$num %=2;
echo $num;
echo "<br>";


// comparision operator ==,<=,>=,<,>,!=
echo "<br>Comparision Operator<br>";
$x = 10;
$y = 10;
echo $x == $y;
echo "<br>";
//  ==
echo var_dump($x == $y);
echo "<br>";

$x = 10;
$y = "10";
echo $x == $y;
echo "<br>";

echo var_dump($x == $y); // not checking the the datatype
echo "<br>";
// ===
echo var_dump($x === $y); //  checking the the datatype also
echo "<br>";
// !=
$x = 10;
$y = "10";
echo $x != $y;
echo "<br>";
echo var_dump($x != $y); // not checking the the datatype
echo "<br>";


// !==
$x = 10;
$y = "10";
echo $x !== $y;
echo "<br>";
echo var_dump($x !== $y); //  checking the the datatype
echo "<br>";


// <=>  left side less then -1, left side is = then 0, left side is greater then 1

// Increment & decrement Operator
// ++x, --x, x++, x--

// Logical operator 
// and, or, not, xor


// array operator
$color1 = array("blue" => "2", "green" => "5");
$color2 = array("black" => "2", "yellow" => "5");

// + union
print_r($color1 + $color2); 
echo "<br>";

// == equalto
var_dump(print_r($color1 == $color2)); 
echo "<br>";

// === identity
var_dump($color1 === $color2); 
echo "<br>";

// !=
var_dump($color1 != $color2); 
echo "<br>";

// Conditional Assignment
// ?:
// expression ? true : false
$x = 0;
echo $x ? "True" : "False";

?>