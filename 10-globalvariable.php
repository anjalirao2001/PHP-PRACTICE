<?php
// global variable

// GLOBAL

$a = 10;
$b = 30;

function num()
{
    $GLOBALS['result'] = $GLOBALS['a'] +  $GLOBALS['b'];
    echo $GLOBALS['result'];
}
num();
echo $result;

echo "<br>";
// $_SERVER => it will return the current path

echo $_SERVER['PHP_SELF']; // return current path of the file
echo "<br>";
echo $_SERVER['SERVER_ADDR']; // return ip address of the server
echo "<br>";
echo $_SERVER['SERVER_NAME']; // return name of the server
?>