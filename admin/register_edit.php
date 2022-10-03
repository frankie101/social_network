<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profiles 
    </h6>
  </div>

  <div class="card-body">

 <?php

 $connection = mysqli_connect("localhost","root","","social_network");

  	if(isset($_POST['edit_btn']))
{
	$admin_id = $_POST['edit_id'];

	$query = "SELECT * FROM admin WHERE admin_id='$admin_id'";

	$query_run= mysqli_query($connection, $query);

	foreach($query_run as $row)
	{
		?>
        <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value="<?php echo $row['admin_id'] ?>">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email"  value="<?php echo $row['email'] ?>"class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" id="mypass" value="<?php echo $row['password'] ?>"class="form-control" placeholder="Enter Password">
                <input type="checkbox" onclick="myFunction()"><strong>Show Password</strong>
                        <script>
                            
                            function myFunction() {
                              var x = document.getElementById("mypass");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                            }
                            </script>
            </div>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            <a href="register.php" class="btn btn-danger">Cancel</a>
            
            </form>

         <?php
    }

}
?>


  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>