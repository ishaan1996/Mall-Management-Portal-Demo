<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
//echo $_SESSION['Owner'];
if(empty($_SESSION['Owner']))
{
	header('location:http://localhost/DBProject/login.php?q=2');
}
?>
