<?php
session_start();

$connection = mysqli_connect("localhost","root","","social_network");

if(isset($_POST['registerbtn']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];

	if($password === $cpassword)
	{
		$query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password')";
		$query_run = mysqli_query($connection, $query);

		if($query_run)
		{
			$_SESSION['success'] = "Admin Profile Added";
			header('Location: register.php');
		}
		else
		{
			$_SESSION['status'] = "Admin Profile NOT Added";
			header('Location: register.php');
		}

	}
	else
	{
		$_SESSION['status'] = "Password and Confirm Password Does Not Match";
		header('Location: register.php');
	}
}



if(isset($_POST['delete_btn']))
{
	$user_id = $_POST['delete_user'];

	$query = "DELETE FROM users WHERE user_id='$user_id'";

	$query_run= mysqli_query($connection, $query);

	if($query_run)
	{
		$_SESSION['success']= "Your Data is DELETED";
		header('Location: display_users.php');
	}
	else
	{
		$_SESSION['status'] = "Your Data is NOT DELETED";
		header('Location: display_users.php');
	}
}



if(isset($_POST['delete_btn']))
{
	$admin_id = $_POST['delete_id'];

	$query = "DELETE FROM admin WHERE admin_id='$admin_id'";

	$query_run= mysqli_query($connection, $query);

	if($query_run)
	{
		$_SESSION['success']= "Your Data is DELETED";
		header('Location: register.php');
	}
	else
	{
		$_SESSION['status'] = "Your Data is NOT DELETED";
		header('Location: register.php');
	}
}



if(isset($_POST['delete_btn']))
{
	$post_id = $_POST['delete_post'];

	$query = "DELETE FROM posts WHERE post_id='$post_id'";

	$query_run= mysqli_query($connection, $query);

	if($query_run)
	{
		$_SESSION['success']= "Your Data is DELETED";
		header('Location: display_post.php');
	}
	else
	{
		$_SESSION['status'] = "Your Data is NOT DELETED";
		header('Location: display_post.php');
	}
}


?>