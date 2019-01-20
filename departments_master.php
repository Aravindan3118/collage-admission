<?php 
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
    <a href="manage_departments.php"><button class="btn btn-primary">Add departments</button></a>
    <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Departments list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Name</th>
                  <th>Total seats</th>
                  <th>booked seats</th>
                  <th>Available seats</th>
                  <th>10th average needed</th>
                  <th>12th average needed</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    $table='department_master';												
                    $details = $user->select($table); 
                    if($details){
					foreach($details as $d)
					{
				?>
                <tr>
                  <td><?php echo $d['course_name'];?></td>
                  <td><?php echo $d['total_seats'];?>
                  </td>
                  <td><?php echo $d['booked_seats'];?></td>
                  <td><?php echo $d['total_seats'] - $d['booked_seats'];?></td>
                  <td><?php echo $d['10avg_needed'];?></td>
                  <td><?php echo $d['12avg_needed'];?></td>
                  <td>
                  <a href="manage_departments.php?id=<?php echo $d['id'];?>"><button class="btn btn-primary"><i class="fa fa-edit "></i></button></a>
                  <a href="delete_department.php"><button class="btn btn-primary"><i class="fa fa-trash "></i></button></a>
                  </td>
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
                <th>Course Name</th>
                  <th>Total seats</th>
                  <th>booked seats</th>
                  <th>Available seats</th>
                  <th>10th average needed</th>
                  <th>12th average needed</th>
                  <th>Action</th> 
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