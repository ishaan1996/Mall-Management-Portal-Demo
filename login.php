<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="http://www.hypercityindia.com/media/favicon/default/logo-hyper-city.jpg" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="jquery.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				$(document).scrollTop = 0;
				$("html, body").delay(1500).animate({
					scrollTop: $(".form-cont").offset().top
				}, 1500);
				$(".form-cont form").delay(3000).fadeIn(1000);
				$(".form-cont h2").delay(3000).fadeIn(1000);

			
				$("#password").keyup(function(){
					if($(this).val().length == 20) { 
						$("#error-cont").html("Password Length must be atmost 20 characters");
						$("#error-cont").css({"padding": "10px"})
					}
					else {
						$("#error-cont").html("");
						$("#error-cont").css({"padding": "0"})
					}
				});
			});
		</script>
		<script>
			function reg()
			{
				window.location="customerReg.php";
			}
		</script>
		<style>
			body { 
				background-color: #EEF;

			}
			.navbar { 
				margin: 0;
			}
			.img-parent-cont{ 
				background-color: white;
				margin-top: 4%;
				overflow: hidden;
				width: 100%;
			}
			.login-img {
				float: left;
				margin-left: 5%;
				margin-right: 5%;
				margin-bottom: 5%;
				width: 40%;
				height: 90%;
			}
			.main-cont { 
				margin: 0 auto;
				padding-top: 20%;
				height: 100%;
			}
			h2 { 
				display: none;
			}
			.form-cont {
				
				margin: 0 auto;
				width: 35%;
				height: 100%;
				padding-top: 12%; 
				border-radius: 12px;
				text-align: center;
			}
			form { 
				display: none;
				text-align: left;
				border-radius: 12px;
				background-color: #A9F5A9;
				padding: 40px;
				margin-left: 0 auto;
				width: 100%;
				
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
		<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
			<a href="#" class="navbar-brand">HyperCity</a>
		</nav>
		<div class="img-parent-cont">
					<!--<img class="login-img" src="images/login_img.jpg"/>-->
					<img class="login-img" src="images/login_img4.jpg"/>
					<img class="login-img" src="images/login_img2.png"/>
		</div>
		 
			<div class="form-cont">
				<h2>Login to Account</h2><br><br>
				<form role="form" method="post" action="login_process.php">
					<div class="form-group">
						<label for="uname">Enter the Username</label>
						<input name="uname" class="form-control" id="uname" type="text" placeholder="Username" required />
					</div>
					<div class="form-group">
						<label for="password">Enter the Password</label>
						<input name="pwd" class="form-control" id="password" type="password" placeholder="********" maxlength="20" required />
   					</div>
   					<button type="submit" class="btn btn-primary">Login</button>
   					<button type="button" class="btn btn-primary" onclick=reg();>SignUp</button>
   					<div id="error-cont">
<?php
if($_GET['q']==1)
{
echo '<script>						$("#error-cont").html("Either Username or Password is incorrect !!!");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
else if($_GET['q']==2)
{
echo '<script>						$("#error-cont").html("Sorry, You may have to login again :(");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
else if($_GET['q']==3)
{
echo '<script>						$("#error-cont").html("Sorry, You are not supposed to access that information :(");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
else if($_GET['q']==4)
{
echo '<script>						$("#error-cont").html("You have successfully logged out");
						$("#error-cont").css({"padding": "10px"})
</script>';
}
?>
					</div>
   				</form>
			</div>	
			
		
	</body>
</html>
