<?php
session_start();
session_destroy() or die("hello");
header('location:http://localhost/DBProject/login.php?q=4');
?>
