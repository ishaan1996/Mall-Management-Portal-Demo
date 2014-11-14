<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="http://www.hypercityindia.com/media/favicon/default/logo-hyper-city.jpg" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.javascript" type="text/javascript"></script>
		<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
		<script>
			$(document).ready( function() { 

				$("#user_link").click(function () {
					$("#choice_user").css({
						"padding-left": "20px",
						"padding-right": "20px",
						"color": "white"
					});
					$("#choice_user").html("<a href='#'>Customer</a> or <a href='#'>Employee</a>");
					
				});
			});
		</script>
		<style>
			textarea { 
				border: 1px solid grey;
				padding: 5px 10px;
				transition: all 0.30s;
			}
			input[type=text], input[type=password]{
				border: 1px solid grey;
				border-radius: 20px;
				padding: 5px 10px;
				transition: all 0.30s;
			}
			input:focus{ 
				border: 1px solid rgba(0, 0, 255, 0.6);
				box-shadow: 0 0 2px rgba(0, 0, 255, 0.6);
			}
			textarea:focus { 
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
	<div class="container">
				<form class="main-cont addemp-form">
					<h2 style="margin-left: 5px">Add New Warehouse</h2><br>
					<table>
						<tr class="one-half">
							<td><input id="" type="text"  placeholder="Warehouse ID"/></td>
							<td><input required="true" id="" type="text"  placeholder="Warehouse Name"/></td>
						</tr>
						<tr class="one-half">
							<td><input id="" type="text"  placeholder="Owner"/></td>
							<td><input required="true" id="" type="text"  placeholder="Manager ID"/></td>
						</tr>
						<tr class="one-half">
							<td><input id="" type="text"  placeholder="Phone Number"/></td>
							<td><input required="true" id="" type="text"  placeholder="Rent"/></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>
								<textarea cols="50" rows="5" placeholder="Address"></textarea>
							</td>
						</tr>
					</table>
					<button style="margin-left: 10px;width: 15%;" type="submit" class="btn btn-primary">Add</button>
				</form> 
			</div>
</html>