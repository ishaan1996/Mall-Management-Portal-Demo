<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=2)
{
	header('location:http://localhost/DBProject/login.php?q=3');
	exit();
}
$q="select * from Employee where EmpId=".$_SESSION['Owner'];
$rs=mysql_query($q,$con);
//echo $q;
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
			
			
			.container .addemp-form tr.one-half td { 
				width: 50%;
				border-bottom: 1px solid rgba(0, 0, 0, 0.4);
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
			.container{
				margin-bottom: 40px;
			}
			#error-cont{
				text-align: center;
				margin-top: 20px;
				background-color: black;
				color: white;
				font-family: sans-serif;
				border-radius: 12px;
				}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>
					<li><a title="Home" href="profile2.php"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a title="Edit Profile"href="editemp.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>
			<div class="container">
				<form class="main-cont addemp-form" method=post action="editemp_process.php">
					<span style="display:inline" class="glyphicon glyphicon-edit"></span>
					<h2>Edit Employee Info</h2>
					<table>
						<tr class="one-half">
							<td>Name</td>
							<td><input name="name" type="text" value="<?php echo $row["EmpName"]; ?>" required /></td>
						</tr>
						<tr class="one-half">
							<td>Department ID</td>
							<td><input name="depid" type="text" value="<?php echo $row["DepId"]; ?>" required /></td>
						</tr>
						<tr class="one-half">
							<td>Date of Join</td>
							<td><input name="doj" type="text" value="<?php echo $row["DOJ"]; ?>" disabled /></td>
						</tr>
						<tr class="one-half">
							<td>Date of Birth</td>
							<td><input name="dob" type="text" value="<?php echo $row["DOB"]; ?>" disabled /></td>
						</tr>
						<tr class="one-half">
							<td>Job Type/Job Desription</td>
							<td><input name="jobtype" type="text" value="<?php echo $row["JobType"]; ?>" required /></td>
						</tr>
					</table>
					<br><br>
					<button style="margin: 10px auto;width: 15%;" type="submit" class="btn btn-primary">Save</button>
   					<div id="error-cont">
					<?php
					if($_GET["q"]==1)
{
echo '<script>						$("#error-cont").html("<h4>No such department exists</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
					if($_GET["q"]==2)
{
echo '<script>						$("#error-cont").html("<h4>Successfully updated !!!</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
					?>
				</form> 
					</div>
			</div>
	</body>
</html>

