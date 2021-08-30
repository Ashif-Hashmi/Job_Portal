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
		<h1 class="h3 mb-4 text-gray-800  " >View Worker Category <a href="addworker.php" style="float:right; font-size:18px; color:green;">Add Worker </a> </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>Worker ID</th>
                    <th>Worker Name</th>
                    <th>Worker Image</th>
                    <th>Created Date</th>
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from add_worker");
                    if(mysqli_affected_rows($con)>0){
                      $i=1;
                      while($row=mysqli_fetch_array($query)){

                       
                ?>
                <tr style="text-align:center;">
                    <td ><?php echo $i; ?></td>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><img src="<?php echo $row[2];?>" class="img-thumbnail" width="90px"></td>
                    <td><?php echo $row[3];?></td>
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