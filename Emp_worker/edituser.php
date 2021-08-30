<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Edit User</h1>
<form class="user" method="post" action="Crud_user.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                                    <?php
                                $proid=$_GET['proid'];
                                $query=mysqli_query($con,"select * from normal_user where Id='$proid'");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);  

                                 }
                                ?>
                                        <input type="text" class="form-control " name="Id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Name" value="<?php echo $row[1]; ?>" class="form-control" placeholder="Enter Name"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Email" value="<?php echo $row[2]; ?>" class="form-control" placeholder="Enter Email"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control "
                                             name="Phone" value="<?php echo $row[3]; ?>" placeholder="Phone No" required >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Address" value="<?php echo $row[4]; ?>" class="form-control" placeholder="Enter Address"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                             name="Worktype" value="<?php echo $row[5]; ?>" placeholder="Work Type" required >
                                    </div>
                                </div>

                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="updatebtnuser">
                                  Add Normal 
                                  user
                                </button>
                                <hr>
                                
                            </form>

</section>			
<?php
include 'include/footer.php';
?>