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
$dec=$_POST["dec"];
$q="Update Product set ProdName='".$nm."', Price='".$price."', Qty='".$qty."', MinQty='".$mqty."', Description='".$dec."' where ProdId=".$_POST["pid"];
$rs=mysql_query($q,$con);
header('location:http://localhost/DBProject/edititem_1.php?q=2');

?>
