<?php include('header.php'); ?>
<?php
if($_SESSION['Type']!=3 && $_SESSION['Type']!=5)
	header('location:http://localhost/DBProject/login.php?q=3');
//echo "Owner is".$_SESSION['Owner'];
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
			input[type=text], input[type=password], input[type=number], textarea{
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
			tr.one-one { 
				width: 100%;
			}
			tr.one-one td{ 
				width: 100%;
			}
			tr.one-one td input{
				width: 92.7%;
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
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
		</div>
		<nav>
				<ul>
					<li><a title="Home" href="<?php echo "profile".$_SESSION['Type'].".php"; ?>"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a title="Add new Order"  href="additem.php"><span class="glyphicon glyphicon-plus-sign"></span></a></li>
					<li><a title="Delete an Item" href="delitem.php"><span class="glyphicon glyphicon-minus-sign"></span></a></li>
					<li><a title="Edit Info of Item"href="edititem_1.php"><span class="glyphicon glyphicon-edit"></span></a></li>
					<li><a title="Search An Item"href="searchitem_1.php"><span class="glyphicon glyphicon-search"></span></a></li>
					<li><a title="Logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</nav>
			<div class="container">
				<form class="main-cont addemp-form" method=post action="additem_process.php">
					<h2>Order Info</h2><br>
					<table>
						<tr class="one-one">
							<td colspan=2><input name="pname" type="text" placeholder="Product Name" id="pname" required /></td>
						</tr>
						<tr class="one-half">
							<td><input name="price" type="number" step="0.01" min="0" placeholder="Product Price in Rs." required /></td>
							<td><input name="qty" type="number" min="0" placeholder="Instock Qty" required /></td>
						</tr>
						<tr class="one-half">
							<td><input name="mqty" type="number" min="0" placeholder="Min Qty." required /></td>
							<td>Category
								<select name="cat">
								<?php
								$q="select * from Category";
								$rs=mysql_query($q,$con) or die("Error in Database Connectivity");
								//echo $q;
								while($row=mysql_fetch_array($rs))
								{
									//echo "hello";
									echo "<option value=".$row['CategoryId'].">".$row['CategoryName']."</option>";
								}
								?>
								</select>
							</td>
						</tr>
						<tr class="one-half">
							<td><textarea name="dec" cols="20" rows="4" placeholder="Product Description" required ></textarea>
							<td>Warehouse
								<select name="wid">
								<?php
								$q1="select * from Warehouse";
								echo $q1;
								$rs1=mysql_query($q1,$con) or die("Error in Database Connectivity");
								while($row1=mysql_fetch_array($rs1))
								{
									echo "<option value=".$row1['WId'].">".$row1['WName']."</option>";
								}
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
echo '<script>						$("#error-cont").html("<h4>Item successfully added.</h4>");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
				?>
				</div>
				</form> 
			</div>
	</body>
</html>
