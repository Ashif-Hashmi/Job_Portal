<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../include/conn.php';
?>
<style>
  tr td, tr th{
    color:green !important;
  }
  </style>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h1 class="h3 mb-4 text-gray-800  " >View Home Job <a href="home_job.php" style="float:right; font-size:18px; color:green;">Add Home Job</a> </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>Id</th>
                    <th>Job Name</th>
                    <th>Job Address</th>
                    <th>Work Type</th>
                    <th>Work Timing</th>
                    <th>Release Job</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from home_job");
                    if(mysqli_affected_rows($con)>0){
                      $i=1;
                      while($row=mysqli_fetch_array($query)){

                      
                ?>
                <tr style="text-align:center;">
                    <td ><?php echo $i; ?></td>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td> <a href="edithome_job.php?catid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-edit'></i></a>|
                    <a href="crud_homejob.php?catid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-trash'></i></a></td>
                </tr>
                  <?php
                    $i++; 
                  }
                }
                else{
                  echo 'Data not Found';
                }
                  ?>
            </tbody>
        </table>
    </div>
</div>
</div>

	</section>					

				
<?php
include '../include/footer.php';
?>