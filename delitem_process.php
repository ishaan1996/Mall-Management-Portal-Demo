<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$pid=$_POST["pid"];
$q="select * from Product where ProdId=".$pid;
$rs=mysql_query($q,$con);
$row=mysql_num_rows($rs);
if($row==0)
{
	header('location:http://localhost/DBProject/delitem.php?q=1');
}
else
{
	$q="delete from Product where ProdId=".$pid;
	$rs=mysql_query($q,$con) or die("Error");
	header('location:http://localhost/DBProject/delitem.php?q=2');
}
