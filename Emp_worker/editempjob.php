<?php
 include 'include/header.php';
 include 'include/sidebar.php';
 include 'include/conn.php';
 ?>
<section id="main-content">
<section class="wrapper">
<div class="container-fluid">

                  
<h1 class="h3 mb-4 text-gray-800">Edit Company Details</h1>
<form class="user" method="post" action="Crud_empjob.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                              <?php
                                $proid=$_GET['proid'];
                                $query=mysqli_query($con,"select * from Company_details where Id='$proid'");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);  

                                 }
                                ?>
                                       <input type="text" class="form-control " name="Id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="NoofEmployes" class="form-control" placeholder="No of Employees"value="<?php echo $row[7]; ?>"   required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Email" class="form-control" placeholder="Email Id" value="<?php echo $row[1]; ?>"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                            id="exampleRepeatPassword" name="Image"  required >
                                    </div>
                                </div>
                 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Companyname" class="form-control" placeholder="Company Name" value="<?php echo $row[2]; ?>"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Companyaddres" value="<?php echo $row[3]; ?>" placeholder="Company Address" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Companywork" class="form-control" placeholder="Company Work" value="<?php echo $row[4]; ?>"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Companyestd" value="<?php echo $row[5]; ?>" placeholder="Company ESTD" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="JobName" class="form-control" placeholder="Job Name" value="<?php echo $row[8]; ?>"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="TimeWork" class="form-control" placeholder="Time Work" value="<?php echo $row[9]; ?>"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                   
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control "
                                            id="exampleRepeatPassword" name="AboutCompany" placeholder="About Company" value="<?php echo $row[10]; ?>" required > </textarea>
                                    </div>
                                </div>

                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnupdateJob">
                                  Add Emp Job category
                                </button>
                                <hr>
                                
                            </form>
</div>
</section>
<?php
 include 'include/footer.php';
?>