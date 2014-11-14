<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=1 && $_SESSION['Type']!=5)
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
				padding: 20px 30px 20px
			}
			table { 
				width: 100%;
			}
			tr { 
				width: 100%;
				margin: 0;
				padding: 0;
			}
			td { 
				color: rgba(0, 0, 0, 0.9);
				padding: 20px 10px;
				font-family: sans-serif;
				aborder: 1px solid black;
			}
			
			
			tr.one-half>td { 
				width: 50%;
			}
			tr.one-third {
				text-align: center;
			}
			tr.one-third >td { 
				width: 33%;
			}
			span.glyphicon { 
				margin: 0 auto;
				font-size: 2em;
			}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>
					<li><a title="Home" href="<?php echo "profile".$_SESSION['Type'].".php"; ?>"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a title="Add new Employee"  href="addemp.php"><span class="glyphicon glyphicon-plus-sign"></span></a></li>
					<li><a title="Delete new Employee" href="delemp.php"><span class="glyphicon glyphicon-minus-sign"></span></a></li>
					<li><a title="Edit Info of Employee"href="editemp_1.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Search An Employee"href="searchemp_1.php"><span class="glyphicon glyphicon-search"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>
			<div class="container">
				<form style="text-align:center" class="main-cont addemp-form" method="post" action="searchemp_2.php">
					<h2>Search Employee</h2><br><br>
					<input name="EmpID" type="text" placeholder="Employee ID" required /><br><br>
					<button style="margin: 0 auto;width: 15%;" type="submit" class="btn btn-danger">Search</button>
				</form>
			</div>
	</body>
</html>
