<?php
include("includes/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$studentid = htmlentities(mysqli_real_escape_string($con,$_POST['s_id']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$country = htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
		$course = htmlentities(mysqli_real_escape_string($con,$_POST['u_course']));
		$grad = htmlentities(mysqli_real_escape_string($con,$_POST['u_grad']));
		$status = "verified";
		$posts = "no";
		//$newgid = sprintf('%05d', rand(0, 999999));

		$username = ($first_name . " " . $last_name);
		$check_username_query = "select user_name from users where user_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <9 ){
			echo"<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}

		if($studentid == 'PUC/170275' || $studentid == 'PUC/170304' || $studentid =='PUC/170319')
			{
			echo"<script>window.open('signin.php', '_self )</script>";
			}

			else{
				echo"<script>alert('Your Student ID is Invalid!')</script>";
			exit();

			}



		

		$rand = rand(1, 3); //Random number between 1 and 3

			if($rand == 1)
				$profile_pic = "head_blue.jpg";
			else if($rand == 2)
				$profile_pic = "head_blue.jpg";
			else if($rand == 3)
				$profile_pic = "head_blue.jpg";

			
			


		$insert = "insert into users (f_name,l_name,school_id,user_name,describe_user,Relationship,user_pass,user_email,user_country,user_gender,user_birthday,course,year_of_grad,user_image,user_cover,user_reg_date,status,posts,recovery_account)
		values('$first_name','$last_name','$studentid','$username','Hello PU Alumni Connect.This is my default status!','...','$pass','$email','$country','$gender','$birthday','$course','$grad','$profile_pic','default_cover3.jpg',NOW(),'$status','$posts','Iwanttoputading intheuniverse.')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $first_name, you are Now a Member.')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
	}
?>