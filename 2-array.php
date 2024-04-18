<?php
// Array

echo " Array in PHP<br>";
$color = array("red", "green", "blue", "yellow");

echo "I like " . $color[2] . " color." . "<br>";

print_r($color);

// index array
echo "<br>Loop in php<br>";
$colorLength = count($color);
echo "$colorLength <br>";


for($i=0 ; $i < $colorLength; $i++)
{
    echo $color[$i] . "<br>";

}


// Associative array
echo "<br>Associative array in php<br>";
$subject = array("Anjali" => "CSE", "Riya" => "mech");

echo $subject["Anjali"]."<br>";

foreach($subject as $x => $value)
{
    echo "key = ".$x." , value = ".$value;
    echo "<br>";
}



// Multi dimensional Array

echo " <br>Multi dimensional Array<br>";

$colors = array(array("red",10),array("blue",11),array("orange",13));

// echo $colors[0][1]."<br>";

for($row = 0 ; $row <3 ; $row++)
{
    echo "Row".$row."<br>";
    for($col = 0 ; $col <2 ; $col++)
    {
        echo $colors[$row][$col]."<br>";
    }
}


// Functions in Array
echo " Functions in Array<br>";

// sort()
$fruits = array("apple","mango","banana","guava");

sort($fruits); //ascending order
print_r($fruits);
echo "<br>";

//  rsort()
rsort($fruits); // descending order
print_r($fruits);
echo "<br>";

// asort()

$subject = array("Anjali" => "CSE", "Riya" => "mech","Seema" => "ECE");

asort($subject);
print_r($subject);
echo "<br>";

// ksort => keys in descending order

$subject = array("Riya" => "mech","Anjali" => "CSE","Seema" => "ECE");
print_r($subject);
echo "<br>";
ksort($subject);
print_r($subject);
echo "<br>";


// arsort() => value in descending order

$subject = array("Anjali" => "CSE", "Riya" => "mech","Seema" => "ECE");

asort($subject);
print_r($subject);
echo "<br>";


// Krsort() => keys in ascending order

$subject = array("Anjali" => "CSE", "Riya" => "mech","Seema" => "ECE");

asort($subject);
print_r($subject);
echo "<br>";


?>