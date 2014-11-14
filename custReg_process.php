<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$nm=$_POST["name"];
$adr=$_POST["adr"];
$u=$_POST["uname"];
$ml=$_POST["mail"];
$p=$_POST["pwd"];
$cp=$_POST["cpwd"];
if($p!=$cp)
	header('location:http://localhost/DBProject/customerReg.php?q=1');
else
{
	$q="select Username from User where Username='".$u."'";
	$rs=mysql_query($q,$con) or die("Error in database Connection\n");
	$row=mysql_num_rows($rs);
	if($row > 0)
		header('location:http://localhost/DBProject/customerReg.php?q=2');
	else
	{
		$q="Insert into `User` (`Username`, `Password`, `Type`, `ID`) values ('".$u."','".$p."',0,NULL)";
		$rs=mysql_query($q,$con) or die("Error in Insertion at master table");
		$q="Select * from User where Username='".$u."'";
		$rs=mysql_query($q,$con) or die("Error in Searching at master table");
		$row=mysql_fetch_array($rs);
		$q="Insert into `Customer` (`CustId`, `CustName`, `DOJ`, `LoyaltyPts`, `Address`, `Email`) values ('".$row['ID']."', '".$nm."', '".date('Y-m-d')."', 0, '".$adr."','".$ml."')";
		$rs=mysql_query($q,$con) or die("Error in Insertion at child table");
		header('location:http://localhost/DBProject/customerReg.php?q=3');
	}
}
