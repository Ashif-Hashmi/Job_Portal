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
		<h1 class="h3 mb-4 text-gray-800  " >View Home Setting <a href="addhome.php" style="float:right; font-size:18px; color:green;">Add Home Setting</a> </h1>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="text-align:cente;">
                    <th>S.NO</th>
                    <th>ID</th>
                    <th>Main Heading</th> 
                    <th>Sub Heading</th>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
              <tbody>
                <?php 
                    $query=mysqli_query($con,"select * from home_setting");
                    if(mysqli_affected_rows($con)>0){
                      $i=1;
                      while($row=mysqli_fetch_array($query)){

                       
                ?>
                <tr style="text-align:center;">
                    <td ><?php echo $i; ?></td>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                     <td><?php echo $row[2];?></td>
                     <td><img src="<?php echo $row[3];?>" class="img-thumbnail" width="90px"></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                   
                   
                    <td> <a href="edithome.php?proid=<?php echo$row[0]; ?>"><i style="color:red;" class='fas fa-edit'></i></a>|
                    <a href="Crud_empjob.php?proid=<?php echo$row[0]; ?>"><i style="color:red;" class='fas fa-trash'></i></a></td>
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