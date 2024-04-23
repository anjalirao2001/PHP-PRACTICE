<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <!-- post method -->
   <form action="<?php $_SERVER['PHP_SELF']  ?>" method="post">

   <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" placeholder= "Enter first name" autocomplete = "off">
    <br>
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" placeholder= "Enter first name" autocomplete = "off">
    <br>
    <br>
    <button type="submit">Submit</button>

    </form> 


<?php

// echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    echo $fname ." ";
    
    echo $lname;
}



?>
</body>
</html>