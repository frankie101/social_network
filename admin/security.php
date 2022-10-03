<?php
session_start();

$connection = mysqli_connect("localhost","root","","social_network");


if(!$_SESSION['email'])
{
	header('Location: signin.php');
}

?>
