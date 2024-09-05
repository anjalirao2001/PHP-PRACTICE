<?php

session_start();
session_unset();
session_destroy();
echo "Variables are destroid";
?>