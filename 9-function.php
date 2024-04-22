<?php
// function
/*

function name()
{

}

name(); // calling
*/

function welcome()
{
    echo "Welcome to PHP Tutorial<br>";
}

welcome();
welcome();
welcome();


function welcome1($name)
{
    echo "Welcome $name";
    echo "<br>";
}

welcome1("Anjali");

function add($x,$y)
{
    return $x + $y;
}

echo add(10,20);

/*
// this will not allow to add string and number

declare(strict_types = 1);
function num(int $x, int $y)
{
    return $x+$y;
}

echo num(10,"20");

*/

// :
declare(strict_types = 1);
function num(int $x, int $y):int
{
    return $x+$y;
}

echo num(10,20);
?>