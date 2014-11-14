<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$nm=$_POST["name"];
$unm=$_POST["uname"];
$p=$_POST["pwd"];
$Type=$_POST["Type"];
$dob=$_POST["dobyear"]."-".$_POST["dobmonth"]."-".$_POST["dobday"];
$doj=$_POST["dojyear"]."-".$_POST["dojmonth"]."-".$_POST["dojday"];
echo $Type;
if($Type==1)
{
	$dn=$_POST["DepName"];
	//echo $_POST["DepId"]."".$_POST["JobType"];
	$q="select * from Department where DepId=".$_POST["DepId"];
	$rs=mysql_query($q,$con);
	$row=mysql_fetch_array($rs);
	if($row["DepName"]==$dn)
	{
		header('location:http://localhost/DBProject/addemp.php?q=1.5');
		exit();
	}
	else if(mysql_num_rows($rs)!=0)
	{
		header('location:http://localhost/DBProject/addemp.php?q=2.5');
		exit();
	}
}
else
{
		$q="select * from Department where DepId=".$_POST["DepId"];
		$rs=mysql_query($q,$con);
		if(mysql_num_rows($rs)==0)
		{
			header('location:http://localhost/DBProject/addemp.php?q=3.5');
			exit();
		}
}
if(!checkdate($_POST["dobmonth"],$_POST["dobday"],$_POST["dobyear"]))
	header('location:http://localhost/DBProject/addemp.php?q=1');
else if(!checkdate($_POST["dojmonth"],$_POST["dojday"],$_POST["dojyear"]))
	header('location:http://localhost/DBProject/addemp.php?q=2');
else if((strtotime($doj) - strtotime($dob))<0)
	header('location:http://localhost/DBProject/addemp.php?q=3');
else
{
	$q="select * from User where Username=".$unm;
	$rs=mysql_query($q,$con);
	if(mysql_num_rows($rs)>0)
		header('location:http://localhost/DBProject/addemp.php?q=4');
	else
	{
		$q="INSERT INTO `User`(`Username`, `Password`, `Type`, `ID`) VALUES ('".$unm."','".$p."',".$Type.",NULL)";
		$rs=mysql_query($q,$con) or die("Error in Database Connection");
//		echo "<br>".$q."<br>";
		$q="select * from User where Username='".$unm."'";
		$rs=mysql_query($q,$con);
//		echo "<br>".$q."<br>";
		$row=mysql_fetch_array($rs);
		$q1="INSERT INTO `Employee`(`EmpId`, `EmpName`, `DOJ`, `DOB`, `JobType`, `DepId`) VALUES (".$row["ID"].",'".$nm."','".$doj."','".$dob."','".$_POST["JobType"]."',".$_POST["DepId"].")";
		$rs=mysql_query($q1,$con);
//		echo "Successful";
		if($Type==1)
		{
			$q="Insert into Department (DepId, DepName, ManagerId) values (".$_POST["DepId"].",'".$_POST["DepName"]."',".$row["ID"].")";
			$rs=mysql_query($q,$con);
		}
		header('location:http://localhost/DBProject/addemp.php?q=5');
	}
}
?>
