<?php
/*
// readfile()
// echo readfile("data.txt");

// fopen()
$file = fopen("data.txt", "r");

// fread()
// echo fread($file,filesize("data.txt")); // filesize() will return the size of the file


// fgets() first line will be printed from the file
// echo fgets($file);

// fgets() return line by line
while(!feof($file))
{
    echo fgets($file);
    echo "<br>";
}

// fgetc() return character by character
while(!feof($file))
{
    echo fgetc($file);
    echo "<br>";
}



// fclose()
fclose($file);

*/

// create and write the files

$myfile = fopen("php.txt", "w");
echo $myfile;
$text = "Anjali Rao";
fwrite($myfile,$text);
$text = " Welcome to PhP tutorial...";
fwrite($myfile,$text);


?>