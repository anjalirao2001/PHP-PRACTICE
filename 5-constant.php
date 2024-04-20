<?php

// syntax of constant
// define(name,value,case_insensitive)
define("NAME", "Anjali"); 
echo NAME;
// echo Name; //case insensitive is not supported
echo "<br>";
define("colors",["blue","yellow","green"]);
echo colors[2];
echo "<br>";

function myColor()
{
    echo colors[0];
}

myColor();
?>