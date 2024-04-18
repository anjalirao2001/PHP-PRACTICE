<?php

// single line comment
# single line comment

/*
multiline comments
*/
echo "Hello Anjali<br>"; //printing

// Variables
$name = "Anjali";
$age = 20;
$isMale = true;

echo $name ."<br>";
echo $age ."<br>";
echo $isMale ."<br>";


/* variable scope
    1. local scope
    2. global scope
    3. static scope
*/

// local can't be accessed outside the function

echo "<br>Local scope example<br>";
$number1 = 30;
function testing()
{
    $number2 = 10;
    echo $number2 ."<br>";
}
testing();
echo $number2 ."<br>";

// global can be accessed outside the function

echo "<br>global scope example<br>";
$number1 = 30;
function testing2()
{
    $number2 = 10;
    echo $number2 ."<br>";
}
testing2();
echo $number1;

//  static scope can be accessed outside the function & life of the variable will not end

echo "<br>Static scope example<br>";
$number1 = 30;
function testing3()
{
    static $number2 = 10;
    echo $number2 ."<br>";
    $number2--;
}
testing3();
testing3();
testing3();
testing3();
testing3();
testing3();


/* Datatype 
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Array
    6. Object
    7. Null
    8. Resource

*/

// string 
echo "<br>String in PHP<br>";
$name1 = "Anjali Rao";
echo $name1 ."<br>";
echo var_dump($name1) ."<br>"; // return the datatype in php


echo "<br>Integer in PHP<br>";
$num = -1;
echo $num ."<br>";
echo var_dump($num) ."<br>";

// Float

echo "<br>Float in PHP<br>";
$num = 12.5;
echo $num ."<br>";
echo var_dump($num) ."<br>";

// Boolean

echo "<br>Boolean in PHP";
$isValid = false;
echo $isValid ."<br>";
echo var_dump($isValid)."<br>" ;

$isValid = true;
echo $isValid ."<br>";
echo var_dump($isValid)."<br>" ;

// NULL


echo "<br>Null in PHP";
$fruit = null;
echo $fruit ."<br>";
echo var_dump($fruit)."<br>" ;

// Object


echo "<br>Object in PHP<br>";
class Fruit{
    public $name;
    public $color;
    public function setName($n)
    {
        $this->name = $n;  
    }
    public function getName()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$apple->setName("Apple");
echo $apple->getName()."<br>";


?>