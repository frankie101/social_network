<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #1167b1;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
		background-color: #1167b1;

	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
</style>
<body>
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">PU Alumni Connect</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4" style="left:0.5%;">
			<img src="images/logo.png" class="img-rounded" title="Academic City" width="550px" height="565px">
			
		</div>
	<div class="col-sm-8">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Login to PU Alumni Connect</strong></h3>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
					<div class="overlap-text">
						<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
						<a style="text-decoration:none;float: right;color: #FDB515;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php"><b>Forgot?</b></a>
					</div>
					<a style="text-decoration: none;float: right;color: #FDB515;" data-toggle="tooltip" title="Create Account!" href="signup.php"><b>Don't have an account?</b></a><br><br>

					<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
					<?php include("login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>