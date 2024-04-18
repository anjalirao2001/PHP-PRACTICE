<?php
// string functions
// String length => strlen();
echo "<br>string functions<br>";
$language = "Hypertext Preprocessor";
$len = strlen($language);
echo $len;

// word count =>str_word_count();
echo "<br>word count<br>";
$language = "My name is Anjali";
$len = str_word_count($language);
echo $len;

// string reverse => strrev();

echo "<br>string reverse<br>";
$language = "My name is Anjali";
$len = strrev($language);
echo $len;


// String position => strpos();

echo "<br>string position<br>";
$language = "Hypertext Preprocessor Preprocessor";
$len = strpos($language,"Preprocessor");
echo $len;



?>