<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../Emp_worker/include/conn.php';
?>
?>
<style>
  tr td, tr th{
    color:green !important;
  }
  </style>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h1 class="h3 mb-4 text-gray-800  " >View Candidate Details <a href="addempcandidate.php" style="float:right; font-size:18px; color:green;">Add Candidate Details</a> </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>Candidate ID</th>
                    <th>Candidate Email</th>
                    <th>Candidate Image</th>
                    <th>Candidate Phone</th>
                    <th>Candidate Name</th>
                    <th>Candidate Address</th>
                    <th>Candidate DOB</th>
                    <th>About Candidate </th>
                    <th>Candidate Work</th>
                   

                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from emp_candidate");
                    if(mysqli_affected_rows($con)>0){
                      $i=1;
                      while($row=mysqli_fetch_array($query)){

                       
                ?>
                <tr style="text-align:center;">
                    <td ><?php echo $i; ?></td>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><img src="<?php echo $row[2];?>" class="img-thumbnail" width="80px"></td>
                     <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td ><?php echo substr($row[7],0,20).'.......Read More' ;?></td>
                    <td><?php echo $row[8];?></td>
                    <td><?php echo $row[9];?></td>
                   
                    <td> <a href="../Emp_worker/editempcandidate.php?proid=<?php echo$row[0]; ?>"><i style="color:black;" class='fas fa-edit'></i></a>|
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