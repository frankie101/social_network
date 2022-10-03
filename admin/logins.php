<?php
session_start();

$connection = mysqli_connect("localhost","root","","social_network");

	if (isset($_POST['login'])) {

		$email = htmlentities(mysqli_real_escape_string($connection, $_POST['email']));
		$password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));

		$select_user = "select * from admin where email='$email' AND password='$password' ";
		$query= mysqli_query($connection, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['email'] = $email;

			echo "<script>window.open('index.php', '_self')</script>";
		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
	}
?>