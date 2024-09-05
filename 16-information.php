<?php

session_start();

if(isset($_SESSION['username']))
{

    echo "Welcome ".$_SESSION['username'];
    echo "<br>";
    echo "Your email is ".$_SESSION['email'];
    echo "<br>";
    echo "And your password is ".$_SESSION['password'];
    

}
else
{
    echo "Please login again to continue...";
}
?>