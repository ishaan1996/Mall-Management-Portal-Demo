<?php
session_start();
$host="localhost";
$usr="root";
$pwd="password";
$con=mysql_connect($host,$usr,$pwd);
mysql_select_db("DBProject",$con) or die("Error in Database Connectivity\n");
$prod=$_POST["prod"];
$cat=$_POST["cat"];
$q="Select * from Product where ProdName like '%".$prod."%' and CategoryId=".$cat;
//echo $q;
$rs=mysql_query($q,$con) or die ("Error in Updation\n");
if(mysql_num_rows($rs)==0)
	header('location:http://localhost/DBProject/custsearch?q=1');
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
			input[type=text], input[type=password], textarea{
				border: 1px solid grey;
				border-radius: 20px;
				padding: 5px 10px;
				transition: all 0.30s;
			}
			textarea { 
				border-radius: 0;
			}
			input:focus, textarea:focus{ 
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
			tr.one-half td:last-child { 
				text-align: right;
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
					<li><a title="Logout" href="login.php?q=4"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>
			<div class="container">
				<form class="main-cont addemp-form">
					<span style="display:inline" class="glyphicon glyphicon-search"></span>
					<h2>Search Results</h2><br><br>
					<?php
					while($row=mysql_fetch_array($rs))
					{
				echo	'<br><br><table>
						<tr class="one-half">
							<td>
								Product Name
							</td>
							<td>
								<input type="text" value="'.$row['ProdName'].'" disabled/>
							</td>
						</tr>
						<tr class="one-half">
							<td>
								Price
							</td>
							<td>
								<input type="text" value="'.$row['Price'].'" disabled/>
							</td>
						</tr>
						<tr class="one-half">
							<td>
								Quantity In Stock
							</td>
							<td>
								<input type="text" value="'.$row['Qty'].'" disabled/>
							</td>
						</tr>
						<tr class="one-half">
							<td style="border: 0">
								Description
							</td>
							<td style="border: 0">
								<textarea col="20" row="20" disabled>'.$row['Description'].'</textarea>
							</td>
						</tr>
					</table>';
				}
				?>
				</form> 
			</div>
	</body>
</html>
