<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <!-- Get Method -->
    <!-- get is used to collect the url data -->
    <!-- post is used to collect the form data-->
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?subject = PHP">CLICK ME</a>


    <?php
    
    echo "This is ". $_GET['subject']."tutorial";
    
    
    ?>

    <!-- when to use get and post -->
    <!-- when using get, 
    everybody can see the data. 
    it will not provide any security,
    cant pass leanthy parameter,
    limit to 2000 character

    when using post, 
    only the user who is logged in can see it,
    it will provide security ,
    form data is collected,
    can send unlimited data

-->

<form action="welcome.php" method = "post">

<br>
<input type="text" name="fname" autocomplete="off">
<br>
<br>
<input type="text" name="lname" autocomplete="off">
<br>
<br>
<button type="submit">Submit</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
}

?>
</body>
</html>