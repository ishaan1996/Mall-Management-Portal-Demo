<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$nm=$_POST["name"];
$dp=$_POST["depid"];
$Type=$_POST["jobtype"];
$q="Select * from Department where DepId=".$dp;
$rs=mysql_query($q,$con);
if(mysql_num_rows($rs)==0)
	header('location:http://localhost/DBProject/editemp_2.php?q=2.5');
else
{
	$q="Update Employee set EmpName='".$nm."', DepId='".$dp."', JobType='".$Type."' where EmpId=".$_POST["EmpId"];
	$rs=mysql_query($q,$con);
	header('location:http://localhost/DBProject/editemp_1.php?q=3');
}
