<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Workers Category</h1>
<form class="user" method="post" action="Crud_worker.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                   
                              <?php
                                $proid=$_GET['proid'];
                                $query=mysqli_query($con,"select * from workers where Worker_id='$proid'");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);  

                                 }
                                ?>
                                       <input type="text" class="form-control " name="Id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    </div>
                               
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workername" class="form-control" placeholder="Worker Name"  value="<?php echo $row[3]; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workerwork" placeholder="Worke Type *"  value="<?php echo $row[5]; ?>" required >
                                    </div>
                                </div>  
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workerphone" class="form-control" placeholder="Worker Phone No *"  value="<?php echo $row[1]; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workeremail" placeholder="Worker Email *"  value="<?php echo $row[2]; ?>" required >
                                    </div>
                                </div>  
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workeraddress" class="form-control" placeholder="Worker Address *"  value="<?php echo $row[4]; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workerexperience" placeholder="Worker Experience *"  value="<?php echo $row[6]; ?>" required >
                                    </div>
                                </div> 
                                <div class="form-group row" >
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea type="text" name="Aboutworker" class="form-control" placeholder="About Worker*"  value="<?php echo $row[7]; ?>"></textarea>
                                    </div> 
                                    </div>
                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnworkerupdate">
                                  Add Worker Details
                                </button>
                                <hr>
                                
                            </form>
                        

</section>			
<?php
include 'include/footer.php';
?>