<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=0)
	header('location:http://localhost/DBProject/login.php?q=3');
$q="select * from Category";
$rs=mysql_query($q,$con) or die ("Error in database connectivity");
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
				 span { 
				font-size:2em; 
			}
			form.search-form {
				width: 40%;
				margin: 0 auto;
				background-color: #DDD;
				padding: 40px;
			}
			form.search-form input, select{ 
				margin-top: 20px;
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
			<div clas="container">
				<form class="search-form" method=post action=custsearch_process.php>
					<span  class="glyphicon glyphicon-search"></span>
					<h2>Search Item</h2><br>
					<input class="form-control" type="text" name="prod"/>
					<select name="cat">
						<?php
						while($row=mysql_fetch_array($rs))
						{
							echo "<option value='".$row["CategoryId"]."'>".$row["CategoryName"]."</option>";
						}
						?>
					</select>
					<br><br>
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
<?php if($_POST['q']==1) echo "Sorry, No result found" ?>
		</div>
	</body>
</html>
