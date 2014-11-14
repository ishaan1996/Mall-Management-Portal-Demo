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
				border-radius: 14px;
				padding: 3px;
				padding-left: 8px;
			}
			input:focus, input:active { 
				box-shadow: 0 0 1px rgba(0, 0, 255, 0.4);
			}
			body { 
				zbackground-color: #EEF;

			}
			
			.header-cont{ 
				font-size: 0;
				margin: 0;
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
			}
			.side-cont { 
				display: inline-block;
				font-size: 14px;
				vertical-align: bottom;
				height: 20%	;
			}
			.main-cont { 
				margin-top: 40px;
			}
			.form-cont { 
				margin: 0 auto;
				width: 45%;
				padding: 40px;
				background-color: #EEE;
			}
			.form-side-cont { 
				margin-right: 3%;
				display: inline-block;
				vertical-align: middle;
				margin-bottom: 10px;
			}
			.myform-group label { 
				display: inline-block;
				vertical-align: middle;
				
			}
			.myform input {
				width: 20%;
			}
			.btn-submit{
				margin-top: 20px;
			}
			#error-cont{
				margin-top: 10px;
				background-color: black;
				color: white;
				font-family: sans-serif;
				border-radius: 12px;
			}
			.horizontal label { 
				display: inline;
			}
		</style>
	</head>
	<body>
		<div class="header-cont">
			<img class="side-cont" src="images/header-img.gif"/>
			<img class="side-cont" style="width: 71.2%" src="images/white-bg2.png" />
		</div>
		<div class="container main-cont"> 
			<div class="form-cont">
				<form method="post">

						<label for="uname">Enter the Username</label>
						<input id="uname" type="text" placeholder="Username" />
						
						<label for="passwd">Password</label>
						<input id="passwd" type="password" placeholder="*******" maxlength="10" />
	   					
	   					<div id="error-cont">
						</div>
   				</form>
			</div>	
		</div>
	</body>
</html>
