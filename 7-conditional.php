<?php
echo " Conditional Operator";
echo "<br>";
// if
$x = 20;
if ($x >10)
{
    echo "Greater";
    echo "<br>";
}
    
echo "I am outside if";


//  if - else

// multiple conditional statement
// if - else if - else 

// Switch
$color = "yellow";
switch($color)
{
    case "red" :
        echo "this is red";
        break;
    case "purple" :
        echo "this is purple";
        break;
    case "yellow" :
        echo "<br>this is yellow<br>";
        break;
    default:
        echo "I am not in list";
}
?>