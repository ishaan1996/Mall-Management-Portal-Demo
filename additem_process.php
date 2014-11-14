<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$nm=$_POST["pname"];
$price=$_POST["price"];
$qty=$_POST["qty"];
$mqty=$_POST["mqty"];
$cat=$_POST["cat"];
$dec=$_POST["dec"];
$wid=$_POST["wid"];
$q="INSERT INTO Product(ProdId, ProdName, Price, Qty, MinQty, Description, CategoryId, WId) VALUES (NULL, '".$nm."', '".$price."', '".$qty."', '".$mqty."', '".$dec."', '".$cat."', '".$wid."')";
//echo $q;
$rs=mysql_query($q,$con) or die("Error");
header('location:http://localhost/DBProject/additem.php?q=1');
?>
