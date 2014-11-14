<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="http://www.hypercityindia.com/media/favicon/default/logo-hyper-city.jpg" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.javascript" type="text/javascript"></script>
		<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
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
					<li><a title="Add new Employee"  href="addemp.php"><span class="glyphicon glyphicon-plus-sign"</span></a></li>
					<li><a title="Delete new Employee" href="delemp.php"><span class="glyphicon glyphicon-minus-sign"></span></a></li>
					<li><a title="Edit Info of Employee"href="editemp_1.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Search An Employee"href="searchemp.php"><span class="glyphicon glyphicon-search"></span></a></li>
					<li><a title="Home" href="manager_profile.php"><span class="glyphicon glyphicon-home"></span></a></li>
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
								<td>Dont Know</td>
							</tr>
							<tr>
								<td>Department ID</td>
								<td>Dont Know</td>
							</tr>
							<tr>
								<td>Job Type</td>
								<td>Dont Know</td>
							</tr>
							<tr>
								<td>Date of Join</td>
								<td>Dont Know</td>
							</tr>
							<tr>
								<td style="border: 0" >Date of Birth</td>
								<td style="border: 0" >Dont Know</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	</body>
</html>