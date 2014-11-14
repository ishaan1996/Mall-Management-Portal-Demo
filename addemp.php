<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=1 && $_SESSION['Type']!=5 )
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
			input[type=text], input[type=password], input[type=date], input[type=radio] {
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
			#error-cont{
				text-align: center;
				margin-top: 20px;
				background-color: black;
				color: white;
				font-family: sans-serif;
				border-radius: 12px;
				}
		</style>
		<script>
			function abc()
			{
				var x= document.getElementById("depid");
				x.setAttribute("type", "text");
				x.setAttribute("required", "true");
			}
			function def()
			{
				var x= document.getElementById("depid");
				x.setAttribute("type", "hidden");
				x.setAttribute("required", "false");
			}
		</script>
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
				<form class="main-cont addemp-form" method=post action="addemp_process.php">
					<h2>Personal Info</h2><br>
					<table>
						<tr class="one-half">
							<td colspan=2><input style="width:93%" name="name" id="fname" type="text"  placeholder="Full Name" required /></td>
						</tr>
						<tr class="one-half">
							<td><input name="uname" id="fname" type="text"  placeholder="Username" required /></td>
							<td><input name="pwd" id="lname" type="text"  placeholder="Password" required /></td>
						</tr>
						<tr class="one-half">
							<td><input name="DepId" id="empid" type="text"  placeholder="Department ID" required /></td>
							<td><input name="JobType" id="jtype" type="text"  placeholder="Job Type" required /></td>
						</tr>
						<tr>
							<td>Who is he?<br>
								<input type="radio" name="Type" value="1" onfocus="abc()" >Manager<br>
								<input type="radio" name="Type" value="2" checked onfocus="def()" >Subordinate
							</td>
							<td><input name="DepName" id="depid" type="hidden"  placeholder="Department Name" required /></td>
						</tr>
						<tr class="one-half">
							<td><h4>Date of Birth</h4>
							<select name="dobday">
							<?php
							for($x=1;$x<32;$x++)
								echo "<option value='".$x."'>".$x."</option>";
							?>
							</select>
							<select name="dobmonth">
							<?php
							for($x=1;$x<13;$x++)
								echo "<option value=".$x.">".$x."</option>";
							?>
							</select>
							<select name="dobyear">
							<?php
							for($x=(date("Y")-40);$x<(date("Y")-18);$x++)
								echo "<option value=".$x.">".$x."</option>";
							?>
							</select>
							</td>
							<td><h4>Date of Appointment</h4>
							<select name="dojday">
							<?php
							for($x=1;$x<32;$x++)
								echo "<option value='".$x."'>".$x."</option>";
							?>
							</select>
							<select name="dojmonth">
							<?php
							for($x=1;$x<13;$x++)
								echo "<option value=".$x.">".$x."</option>";
							?>
							</select>
							<select name="dojyear">
							<?php
							for($x=1990;$x<=date("Y");$x++)
								echo "<option value=".$x.">".$x."</option>";
							?>
							</select>
							</td>
						</tr>
					</table>
					<button style="margin-left: 10px;width: 15%;" type="submit" class="btn btn-warning">Add</button>
   					<div id="error-cont">
				<?php
				if( $_GET["q"]==1 )
{
echo '<script>						$("#error-cont").html("<h4>Invalid DOB</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==1.5 )
{
echo '<script>						$("#error-cont").html("<h4>This department already has a Manager.</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==2 )
{
echo '<script>						$("#error-cont").html("<h4>Invalid DOJ</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==2.5 )
{
echo '<script>						$("#error-cont").html("<h4>"Department ID" and "Department Name" do not match</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==3 )
{
	echo '<script>						$("#error-cont").html("<h4>Invalid combination of DOB and DOJ</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==3.5 )
{
	echo '<script>						$("#error-cont").html("<h4>Sorry, no such department exists</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==4 )
{
	echo '<script>						$("#error-cont").html("<h4>Username already exists</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				else if( $_GET["q"]==5 )
{
	echo '<script>						$("#error-cont").html("<h4>Employee successfully added !!!</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				?>
				</div>
				</form>
			</div>
	</body>
</html>
