<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=1)
	header('location:http://localhost/DBProject/login.php?q=3');
//echo "Type=".$_SESSION['Type'];
$q="select * from Employee where EmpId=".$_SESSION['Owner'];
$rs=mysql_query($q,$con) or die("No such user found in the database :(");
$row=mysql_fetch_array($rs);
$q1="select * from Department where DepId=".$row['DepId'];
$rs1=mysql_query($q1,$con) or die("No such manager found :(");
$row1=mysql_fetch_array($rs1);
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
				width: 40%;
				background-color: #EEE;
				padding: 20px 30px 20px
			}
			table { 
				width: 100%;
			}
			tr { 
				width: 100%;
			}
			.main-cont .info-cont table tr td { 
				border-bottom: 1px solid rgba(0, 0, 0, 0.2);
				color: rgba(0, 0, 0, 0.9);
				padding: 20px 10px;
				font-family: sans-serif;
				width: 50%;
			}
			.main-cont .profile-info-cont tr td:last-child { 
				color: rgba(0, 0, 0, 0.4);
				text-align: right;
			}
			span.glyphicon { 
				margin: 0 auto;
				font-size: 2em;
			}
			.addemp-form { 
				margin: 0 auto;
				width: 100%;
				background-color: #EEE;
				padding: 20px 30px 20px
			}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>
					<li><a title="Home" href="profile1.php"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a title="Add new Employee"  href="addemp.php"><span class="glyphicon glyphicon-plus-sign"></span></a></li>
					<li><a title="Delete new Employee" href="delemp.php"><span class="glyphicon glyphicon-minus-sign"></span></a></li>
					<li><a title="Edit Info of Employee"href="editemp_1.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Search An Employee"href="searchemp_1.php"><span class="glyphicon glyphicon-search"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>
			<div class="container main-cont">
				<div class="profile-info-cont">
					<h2> Profile Info</h2><br>
					<div class="info-cont">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $row['EmpName']; ?></td>
							</tr>
							<tr>
								<td>Department Name</td>
								<td><?php echo $row1['DepName']; ?></td>
							</tr>
							<tr>
								<td>Job Type</td>
								<td><?php echo $row['JobType']; ?></td>
							</tr>
							<tr>
								<td>Date of Join</td>
								<td><?php echo $row['DOJ']; ?></td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td><?php echo $row['DOB']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	</body>
</html>
