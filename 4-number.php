<?php
// Number function
// is_int()
echo "Number function<br>";
echo "is_int()<br>";
$num = 10;
echo(is_int($num))."<br>"; // check no is integer or not
var_dump(is_int($num))."<br>";
echo "<br>";


// is_numeric()
echo "<br>is_numeric()<br>";
$num = "10aa";
echo(is_int($num))."<br>"; // check no is integer or not
var_dump(is_numeric($num))."<br>";

echo "<br>";

// is_float()
echo "<br>is_float()<br>";
$num = "10aa";
echo(is_float($num))."<br>"; // check no is integer or not
var_dump(is_numeric($num))."<br>";

echo "<br>";

// casting

echo "<br>casting<br>";
$x = 10.333;
echo $x."<br>";
var_dump($x)."<br>";
$intnumber = (int)$x;
echo "<br>";
echo $intnumber."<br>";
var_dump($intnumber)."<br>";

echo "<br>";
// math function

echo "<br>math function<br>";
//  pi()
echo pi()."<br>";

// min()
echo (min(1,3,5,7,0,4));
echo "<br>";

// max()
echo (max(1,3,5,7,0,4));
echo "<br>";

// abs()
echo (abs(-100));
echo "<br>";

// sqrt()
echo (sqrt(64));
echo "<br>";

// round()
echo (round(6.1));
echo "<br>";

// rand()
echo (rand());
echo "<br>";

// rand(range1,range2)
echo (rand(10,100));
echo "<br>";
?>