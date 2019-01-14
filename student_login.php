<?php 
    include './inc/services/class.user.php';
    include './inc/head_ass.php';
    $user = new User();
    if(isset($_POST['submit'])){

      $email = $_POST['email'];
      $password = $_POST['password'];
      $table='student_master';
	  $rows='*';
	  $where='email="'.$_POST['email'].'"  and password="'.$password.'"';
      $login = $user->select($table,$rows,$where);
      if($login)
	{
        echo '<script>alert("user Valid")</script>';
    }
    else{
        echo '<script>alert("user Invalid")</script>';
    }

    }
 ?>
   <div class="container">
  
    <section class="content ">
    <div class="register-box-body col-md-4 col-md-offset-4">
    <p class="login-box-msg">Login</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name='email' placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name='password' placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name='submit' class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
    </div>

    <a href="student_register.php" class="text-center">Create Account</a>
  </div>

    </section>
  </div>

  <?php 
//   include './inc/footer.php';
   ?>