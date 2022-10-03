
<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>Payments</title>
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
	
	#submit{
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

	fieldset
{
  
  display:inline-block;
}


input[type="radio"] {
  margin-left:0px;
  border:1px solid #888;
}
@import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Lato', sans-serif;
}


.wrapper{
  display: inline-flex;
  height: 90px;
  width: 200px;
  align-items: center;
  justify-content: space-evenly;
  border-radius: 5px;
  padding: 20px 15px;
  
}
.wrapper .option{
  background: 
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  margin: 0 10px;
  border-radius: 5px;
  cursor: pointer;
  padding: 0 10px;
  border: 2px solid lightgrey;
  transition: all 0.3s ease;
}
.wrapper .option .dot{
  height: 20px;
  width: 20px;
  background: #d9d9d9;
  border-radius: 50%;
  position: relative;
}
.wrapper .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #0069d9;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}
input[type="radio"]{
  display: none;
}
#option-1:checked:checked ~ .option-1,
#option-2:checked:checked ~ .option-2{
  border-color: #0069d9;
  background: #0069d9;
}
#option-1:checked:checked ~ .option-1 .dot,
#option-2:checked:checked ~ .option-2 .dot{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 15px;
  color: #808080;
}
#option-1:checked:checked ~ .option-1 span,
#option-2:checked:checked ~ .option-2 span{
  color: #fff;
}

#credit_cards {
    width: 100%;
    margin-top: 25px;
    text-align: center;
}
</style>
<body>
<div class="row">
	<div class="col-sm-12">
	
	</div>
</div>
<div class="row">
	<div class="col-sm-4" style="left:0.5%;">
			<img src="images/moni3.jpg" class="img-rounded" title="PU Alumni Connect" width="550px" height="565px">
			
		</div>
	<div class="col-sm-8">
		<div class="main-content">

			<div class="form-group" id="credit_cards">
                <img src="images/visa.jpg" id="visa">
                <img src="images/mastercard.jpg" id="mastercard">
                <img src="images/amex.jpg" id="amex">
            </div>

			<div class="header">
				<h3 style="text-align: center;"><strong>Your Payment Information</strong></h3>
			</div>

			<div  id="insert_fund" class="">
				<form action="" method="post">

					<div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="name_oncard" type="text" class="form-control" placeholder="Name On Card" name="name_oncard" required="required">
                    </div><br>

                    <div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
						<input id="amount" type="number" class="form-control" placeholder="Amount" name="amount" required="required">
					</div><br>

						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
						<input id="credit" type="number" class="form-control" placeholder="Credit Card Number" name="u_credit" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="security" type="number" class="form-control" placeholder="Security Code" name="security" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input id="expiration_date" type="month" min="2021-11" value="2021-11" class="form-control input-md" placeholder="Expiration date " name="expiration" required="required">
					</div><br>

			       <fieldset>
       
           
 <div class="wrapper">
 <input type="radio" name="trans_type" id="option-1" value="Donation"checked>
 <input type="radio" name="trans_type" id="option-2" value="Dues">
   <label for="option-1" class="option option-1">
     <div class="dot"></div>
      <span>Donation</span>
      </label>
   <label for="option-2" class="option option-2">
     <div class="dot"></div>
      <span>Dues</span>
   </label>
</div><br>

<input type="checkbox" id="agreement" name="agreement" required="required"> <label>I confirm that all information here are correct.</label>

			<br><br>

					<center><button id="submit" class="btn btn-info btn-lg" name="submit">Submit</button></center>

					
				</form>
				
<?php

if(isset($_POST['submit']))
{	 
	global $con;
	global $user_id;

	 $name_oncard = $_POST['name_oncard'];
	 $amount = $_POST['amount'];
	 $trans_type = $_POST['trans_type'];

	 $sql = "INSERT INTO transaction (user_id,name_oncard,amount,trans_type)
	 VALUES ('$user_id','$name_oncard','$amount','$trans_type')";
	 if (mysqli_query($con, $sql)) {
		echo "<script>alert('Hello $first_name, Your payment of Gh¢ $amount  as $trans_type, is successful!')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>

			</div>
		</div>
	</div>
</div>
</body>
</html>