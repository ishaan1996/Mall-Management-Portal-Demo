<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=0)
	header('location:http://localhost/DBProject/login.php?q=3');
$q="select * from Customer where CustId=".$_SESSION['Owner'];
$rs=mysql_query($q,$con) or die("No such user found in the database :(");
$row=mysql_fetch_array($rs);
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
				border-radius: 20px;
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
			span.glyphicon { 
				margin: 0 auto;
				font-size: 2em;
			}
			.main-cont .info-cont table tr td { 
				color: rgba(0, 0, 0, 0.9);
				padding: 20px 10px;
				font-family: sans-serif;
				border-bottom: 1px solid rgba(0, 0, 0, 0.4);
				width: 50%;
			}
			.main-cont .info-cont table tr td:last-child { 
				color: rgba(0, 0, 0, 0.4);
				text-align: right;
			}
		</style>
	</head>
		<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>
					<li><a title="Home" href="profile0.php"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a title="Edit profile" href="editcust.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Search an item" href="custsearch.php"><span class="glyphicon glyphicon-search"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>

			<div class="container main-cont">	
				<h2> Profile Info<h2><br>
				<div class="info-cont">
					<table>
						<tr>
							<td>Name</td>
							<td><?php echo $row['CustName'] ?></td>
						</tr>
						<tr>
							<td>Date of Joining</td>
							<td><?php echo $row['DOJ'] ?></td>
						</tr>
						<tr>
							<td>Hyper Score</td>
							<td><?php echo $row['LoyaltyPts'] ?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $row['Address'] ?></td>
						</tr>
						<tr>
							<td>Email Id</td>
							<td><?php echo $row['Email'] ?></td>
						</tr>
					</table>
				</div>

			</div>
	</body>

</html>
