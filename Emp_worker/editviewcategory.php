<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
    <div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Company</h1>
<div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Company</h1>
                            </div>
                            <form class="user" method="post" action="crud_category.php" enctype="multipart/form-data">
                                <div class="form-group">
                                <?php
                                $catid=$_GET['catid'];
                                   $query=mysqli_query($con,"select * from add_company where Company_id='$catid' ");
                                   if(mysqli_affected_rows($con)>0){
                                   $row=mysqli_fetch_array($query);
                                   }
                                ?>
                                    <input type="text" class="form-control form-control-user"name="catid" value="<?php echo $catid;
                                    ?>" readonly>
                                </div>

                                <div class="form-group"> 
                                    <input type="text" class="form-control form-control-user"name="CompanyName" value="<?php echo $row[1];?>" required autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user"name="Image" value="<?php echo $row[2];?>"required>
                                </div>
                                
                                <button type="submit" name="updatecomp"  class="btn btn-danger btn-user btn-block">
                                    Add Category
                                </button>
                            </form>
                          </div>
                    </div>
                </div>
</div>
	</section>					

				
<?php
include 'include/footer.php';
?>