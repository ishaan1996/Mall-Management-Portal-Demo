<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=5)
	header('location:http://localhost/DBProject/login.php?q=3');
?>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="http://www.hypercityindia.com/media/favicon/default/logo-hyper-city.jpg" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.javascript" type="text/javascript"></script>
		<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
		<script src="jquery.js" type="text/javascript"></script>
		<script>
			$(document).ready( function() { 

				$("#user_link").click(function () {
					$("#choice_user").css({
						"padding-left": "20px",
						"padding-right": "20px",
						"color": "white"
					});
					$("#choice_user").html("<a href='customerReg.php'>Customer</a> or <a href='addemp.php'>Employee</a>");
					
				});
			});
		</script>
		<style>
			input[type=text], input[type=password] {
				border: 1px solid grey;
				border-radius: 20px;
				padding: 5px 10px;
				transition: all 0.30s;
			}
			input:focus { 
				border: 1px solid rgba(0, 0, 255, 0.6);
				box-shadow: 0 0 2px rgba(0, 0, 255, 0.6);
			}
			.header-cont{ 
				margin: 0;
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
				margin-bottom: 40px;
			}
			nav {
				top: 144px;
				position: fixed;
				left: 0px;
				background-color: #EEE;
				overflow: hidden;
			}
			nav ul { 
				margin: 0;
				padding: 0;
			}
			nav ul li a:hover { 
				background-color: #DDD;
			}
			nav ul li a:link, nav ul li a:hover, nav ul li a:active{ 
				display: block;
				height: 100%;
				text-decoration: none;
				color: rgba(0, 0, 0, 0.4);
				padding: 20px;
			}
			nav ul { 
				list-style-type: none;
			}
			.main-cont { 
				margin: 0 auto;
				width: 60%;
				background-color: #EEE;
				padding: 20px;
				padding-left: 40px;
				padding-right: 40px;
			}
			.main-cont .row ul {
				padding: 5px;
				list-style-type: none;
			}
			.main-cont .row ul li { 
				padding-bottom: 10px;
			}
			.main-cont .row ul li a{
			 
				text-decoration: none;
				font-size: 16px;
			}
			#user_link {
				cursor: pointer;
			}
			#choice_user a { 
				display: inline;
			}
			span.glyphicon { 
				margin: 0 auto;
				font-size: 2em;
			}
			#choice_user {
			border-radius: 10px; 
			margin-left: 30px;
			background-color: black
			}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>	
					<li><a title="Edit My profile" href="editemp_1.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
		</nav>
	</body>
	<div class="main-cont">
		<div class="row">
			<h3>Tables currently in Database</h3>
			<ul>
				<li><a style="display: inline" id="user_link">User</a><div style="display: inline-block" id="choice_user"></div></li>
				<li><a href="customerReg.php">Customer</a></li>
				<li><a href="addemp.php">Employee</a></li>
				<li><a href="#">Department</a></li>
				<li><a href="additem.php">Product</a></li>
				<li><a href="#">ItemOrder</a></li>
				<li><a href="#">Warehouse</a></li>
			</ul>
	</div>
</html>
