<?php

// sessions() used to store data on server while cookies() are used to store data on local system
session_start();
$_SESSION['username'] = "Anjali";
$_SESSION['email'] = "anjali07rao@gmail.com";
$_SESSION['password'] = "Rajput";

 
echo "session data is saved";

?>