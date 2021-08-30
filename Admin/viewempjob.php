<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../Emp_worker/include/conn.php';
?>
<style>
  tr td, tr th{
    color:green !important;
  }
  </style>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h1 class="h3 mb-4 text-gray-800  " >View Company Details </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>Job ID</th>
                    <th>Email</th>
                    
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Company Work</th>
                    <th>Company ESTD</th>
                    <th>Image</th>
                    <th>Employes</th>
                    <th>Job Name</th>
                    <th>Work Timing</th>
                    <th>About Company</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from company_details");
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
                    <td><img src="<?php echo $row[6];?>" class="img-thumbnail" width="80px"></td>
                    <td><?php echo $row[7];?></td>
                    <td><?php echo $row[8];?></td>
                    <td><?php echo $row[9];?></td>
                    <td ><?php echo substr($row[10],0,20).'.......Read More' ;?></td>
                    <td> <a href="editempjob.php?proid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-edit'></i></a>|
                    <a href="Crud_empjob.php?proid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-trash'></i></a></td>
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