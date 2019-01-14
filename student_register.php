<?php 
	// include './inc/header.php';
    // include './inc/sidebar.php';

    include './inc/services/class.user.php';
    include './inc/head_ass.php';
    $user = new User();
    if(isset($_POST['submit'])){
      $student_name = $_POST['student_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $mobile_num = $_POST['mobile_num'];
      $dob = $_POST['dob'];
      $sslcavg = $_POST['sslcavg'];      
      $hslccavg = $_POST['hslccavg'];
      $table1= 'student_master';
      $row='student_name,email,password,mobile,dob,10_avg,12_avg';
      $insert = $user->insert($table1,array($student_name,$email,$password,$mobile_num,$dob,$sslcavg,$hslccavg),$row);
      
      if($insert){
        echo '<script>alert("Student Registered")</script>';
      }
      else{
        echo '<script>alert("something went wrong")</script>';
      }
      // echo '<br>'.$student_name;
      // echo '<br>'.$email;
      // echo '<br>'.$password;
      // echo '<br>'.$mobile_num;
      // echo '<br>'.$dob;
      // echo '<br>'.$sslcavg;
      // echo '<br>'.$hslccavg;

    }
 ?>
   <div class="container">
  
    <section class="content ">
    <div class="register-box-body col-md-4 col-md-offset-4">
    <p class="login-box-msg">Register</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name='student_name' placeholder="Student Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name='email' placeholder="Email">
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
      <div class="form-group has-feedback">
        <input type="date" class="form-control" name='dob' placeholder="D.O.B">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name='sslcavg' placeholder="sslc Average">
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name='hslccavg' placeholder="hslcc Average">
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback">
      <select class="form-control" name='school name'>
      <option value="">------------------------Select College-------------------------</option>
      <option value="College1">College1</option>
      <option value="College2">College2</option>
      <option value="College3">College3</option>
      <option value="College4">College4</option>
    </select>
      
      </div> -->
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name='submit' class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>

    </section>
  </div>

  <?php 
//   include './inc/footer.php';
   ?>