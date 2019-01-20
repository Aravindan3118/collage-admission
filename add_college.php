<?php 
    include_once './session.php';
    if($_SESSION['user_type'] != 'superadmin'){
      header('location:index.php');
    }
  	include 'inc/header.php';
    include 'inc/sidebar.php';
    include 'inc/services/class.user.php';
    $user = new User();
    if(isset($_POST['submit'])){
      $college_name = $_POST['college_name'];
      $college_email = $_POST['college_email'];
      $password = $_POST['password'];
      $mobile_num = $_POST['mobile_num'];
      
      $table1= 'college_master';
      $row='college_name,college_email,college_password,college_mobile';
      $insert = $user->insert($table1,array($college_name,$college_email,$password,$mobile_num),$row);
      
      if($insert){
        echo '<script>alert("College Added")</script>';
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
      <input type="text" class="form-control" name='college_name' placeholder="College Name">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="email" class="form-control" name='college_email' placeholder="College Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" name='password' placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" name='mobile_num' placeholder="Mobile Number">
      <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
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