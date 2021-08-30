<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<style>
  tr td, tr th{
    color:green !important;
  }
  </style>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h1 class="h3 mb-4 text-gray-800  " >View Worker Category <a href="addworker.php" style="float:right; font-size:18px; color:green;">Add Worker Category</a> </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>Worker ID</th>
                    <th>Worker Phone</th>
                    <th>Worker Email</th>
                    <th>Worker Name</th>
                    <th>Worker Address</th>
                
                    <th>Work Type</th>
                    <th>Worker Experience</th> 
                    <th>About Worker</th>
                    <th>Created date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from workers");
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
                    <td><?php echo $row[6];?></td>
                    <td ><?php echo substr($row[7],0,20).'.......Read More' ;?></td>
                    <td><?php echo $row[8];?></td>
                    <td> <a href="editworkerdetail.php?proid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-edit'></i></a>|
                    <a href="Crud_worker.php?proid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-trash'></i></a></td>

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
include 'include/footer.php';
?>