<?php

// PHP loop

// for loop
echo " for loop";
for($x = 0; $x < 10; $x++)
{
    echo $x;
    echo "<br>";
}


echo " foreach loop<br>";

$fruit = array("apple", "orange","banana");
foreach($fruit as $value)
{
    echo $value ."<br>";
}


$fruit = array("apple"=>10, "orange" => 20,"banana" => 30);
foreach($fruit as $x => $value)
{
    echo "$x =>$value" ."<br>";
}

// while loop
$x =1;
while($x<6)
{
    echo $x ."<br>";
    $x++;
}

//  do while

$x =1;
do
{
    echo $x ."<br>";
    $x++;
}while($x<6);


// break, continue, return

?>