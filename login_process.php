<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$u=$_POST["uname"];
$p=$_POST["pwd"];
$q="select * from User where Username='".$u."' and Password='".$p."'";
//echo $q;
$rs=mysql_query($q,$con);
$row=mysql_num_rows($rs);
$info=mysql_fetch_array($rs);
if($row==1)
{
	$_SESSION['Type']=$info['Type'];
	$_SESSION['Owner']=$info['ID'];
	header('location:http://localhost/DBProject/profile'.$_SESSION['Type'].'.php');
}
else
	header('location:http://localhost/DBProject/login.php?q=1');
?>
