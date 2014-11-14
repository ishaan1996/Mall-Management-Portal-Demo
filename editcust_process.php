<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$nm=$_POST["name"];
$adr=$_POST["adr"];
$ml=$_POST["mail"];
$q="Update Customer set CustName='".$nm."', Address='".$adr."', Email='".$ml."' where CustId=".$_SESSION['Owner'];
$rs=mysql_query($q,$con) or die ("Error in Updation\n");
header('location:http://localhost/DBProject/editcust.php?q=1');

?>
