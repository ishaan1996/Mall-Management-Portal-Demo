<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
?>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="http://www.hypercityindia.com/media/favicon/default/logo-hyper-city.jpg" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.javascript" type="text/javascript"></script>
		<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
		<script src="jquery.js" type="text/javascript"></script>
		<style>
			body { 
				zbackground-color: #EEF;

			}
			input[type=text], input[type=password], input[type=email] {
				border-radius: 20px;
			}
			.header-cont{ 
				font-size: 0;
				margin: 0;
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
				margin-bottom: 40px;
			}
			.side-cont { 
				display: inline-block;
				font-size: 14px;
				vertical-align: bottom;
				height: 20%	;
			}
			.main-cont { 
				amargin-top: 60px;
			}
			.form-cont { 
				margin: 0 auto;
				width: 45%;
				padding: 40px;
				background-color: #EEE;
			}
			#error-cont{
				margin-top: 10px;
				background-color: black;
				color: white;
				font-family: sans-serif;
				border-radius: 12px;
			}
			form h2 { 
				margin-bottom: 20px;
			}
			.inp-inline { 
				display: inline;
				width: 45%;
				margin-right: 2.5%;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<div class="container main-cont"> 
			<div class="form-cont">
				<form  method="post" action=custReg_process.php>
					<h2> Personal Information</h2>

					<input style="width: 93%" name="name" class="form-control inp-inline" id="fname" type="text" placeholder="Full Name" class="form-control" required />
   					<input style="width: 93%" name="adr" class="form-control inp-inline" type="text" placeholder="Address" class="form-control" required />
<!--					<input class="form-control inp-inline" id="lname" type="text" placeholder="Last Name" class="form-control" />
   	-->			
   					<br><br><br>
   					<h2>Login Info</h2>

   					<input name="uname" class="form-control inp-inline" id="uname" type="text" placeholder="Username" class="form-control" required />
   					<input name="mail" class="form-control inp-inline" type="email" placeholder="Email Id" class="form-control" required />
   					<input name="pwd" class="form-control inp-inline" id="passwd" type="password" placeholder="Password" maxlength="20" class="form-control" required />
					<input name="cpwd" class="form-control inp-inline" id="cpasswd" type="password" placeholder="Confirm Password" maxlength="20"	 class="form-control" required />
					
   					<button style="border-radius: 20px" type="submit" class="btn btn-primary">Login</button>
   					<div id="error-cont">
   					<?php
if($_GET['q']==2)
	echo "<p align='center'>Sorry, this username already exists...</p>";
else if($_GET['q']==1)
	echo "<p align='center'>Password and Confirmation Password do not match !!!</a></p>";
else if($_GET['q']==3)
	echo "<p align='center'>Successfully registered !!!<a href=login.php> Login here </a></p>";
?>					</div>
   				</form>
			</div>	
		</div>
	</body>
</html>
