<?php 
  include_once './session.php';
  if($_SESSION['user_type'] != 'superadmin'){
    header('location:index.php');
  }
  include './inc/services/class.user.php';
  $user = new User();
	include './inc/header.php';
	include './inc/sidebar.php';
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
    <a href="add_college.php"><button class="btn btn-primary">Add College</button></a>
    <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">College list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>College Name</th>
                  <th>College Email</th>
                  <th>College Phone</th>                   
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    $table='college_master';												
                    $details = $user->select($table); 
                    if($details){
					foreach($details as $d)
					{
				?>
                <tr>
                  <td><?php echo $d['college_name'];?></td>
                  <td><?php echo $d['college_email'];?>
                  </td>
                  <td><?php echo $d['college_mobile'];?></td>
                </tr>
                    <?php }} else{
                        ?>
                <tr >
                  <td colspan='4' class='text-center'>No Data</td>
                   
                </tr>
                    <?php
                    }?>
                
                </tbody>
                <tfoot>
                <tr>
                    <th>College Name</th>
                  <th>College Email</th>
                  <th>College Phone</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
  </div>

  <?php 
  include './inc/footer.php';
   ?>