<!-- cookies -->

<!-- it is a peice of information stored inside our system... we should never set username and password using cookies -->

<?php

// syntax of setting cookies
// setcookie(name,value,expires,path);

$category_name = "Food";
$category_value = "Biriyani";

// setcookie($category_name,$category_value,time()+86400,"/");
setcookie("Food","Biriyani",time()+86400,"/");

echo "Cookie is set";

setcookie("Category","Gadget",time()+3,"/"); // cookie will expire in 3 second
?>