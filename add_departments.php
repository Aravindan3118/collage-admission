<?php 
    include_once 'session.php';
    include_once 'inc/header.php';
    include_once 'inc/sidebar.php';
    include_once 'inc/services/class.user.php';
    
    
    $user = new User();
    if(isset($_POST['submit'])){
      $course_name = $_POST['course_name'];
      $total_seats = $_POST['total_seats'];
      $booked_seats = $_POST['booked_seats'];
      $_10avg = $_POST['10avg'];
      $_12avg = $_POST['12avg'];
      
      $table1= 'department_master';
      $row='college_id,course_name,total_seats,booked_seats,10avg_needed,12avg_needed';
      $insert = $user->insert($table1,array($_SESSION['college_id'],$course_name,$total_seats,$booked_seats,$_10avg,$_12avg),$row);
      
      if($insert){
        echo '<script>alert("Department Added")</script>';
      }
      else{
        echo '<script>alert("something went wrong")</script>';
      }
  

    }
 ?>
   <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="container">
  
  <section class="content ">
  <div class="register-box-body col-md-4 col-md-offset-3">
  <p class="login-box-msg">Add College</p>

  <form action="" method="post">
    <div class="form-group has-feedback">
      <input type="text" class="form-control" name='course_name' placeholder="Course Name">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="number" class="form-control" name='total_seats' placeholder="Total Seats Available">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="number" class="form-control" name='booked_seats' placeholder="Taken seats">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="number" class="form-control" name='10avg' placeholder="10th Average">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="number" class="form-control" name='12avg' placeholder="12th Average">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    
    <div class="row">
   
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" name='submit' class="btn btn-primary btn-block btn-flat">Register</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
 
</div>

  </section>
</div>
    </section>
  </div>

  <?php 
  include 'inc/footer.php';
   ?>