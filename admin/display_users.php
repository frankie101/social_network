<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Members Records 
            
    </h6>
  </div>

  <div class="card-body">

    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
      echo '<h2>' .$_SESSION['success'].'</h2>';

      unset($_SESSION['success']);
    }

        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo '<h2 class="bg-info">' .$_SESSION['status'].'</h2>';

      unset($_SESSION['status']);
    }
    ?>



    <div class="table-responsive">

      <?php
        $connection = mysqli_connect("localhost","root","","social_network");
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Member ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>Course</th>
            <th>Delete </th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select * from users";
        $result = mysqli_query($connection, $sql);
          if($result) 
          {
            while($row = mysqli_fetch_assoc($result))
            {
              ?>

          <tr>
            <td><?php echo $row['user_id'];?></td>
            <td><?php echo $row['user_name'];?></td>
            <td><?php echo $row['user_email'];?></td>
            <td><?php echo $row['user_pass'];?></td>
            <td><?php echo $row['course'];?></td>

             <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_user" value="<?php echo $row['user_id'];?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Delete</button>
                </form>
            </td>
          </tr>
          <?php
            }
            
          }
          else {
            echo "No Record Found";
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>