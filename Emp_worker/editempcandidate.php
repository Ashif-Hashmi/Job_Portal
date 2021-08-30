<?php
 include 'include/header.php';
 include 'include/sidebar.php';
 include 'include/conn.php';
 ?>
<section id="main-content">
<section class="wrapper">
<div class="container-fluid">

                  
<h1 class="h3 mb-4 text-gray-800">Edit Company Details</h1>
<form class="user" method="post" action="Crud_empcandidate.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                              <?php
                                $proid=$_GET['proid'];
                                $query=mysqli_query($con,"select * from emp_candidate where Candidate_id='$proid'");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);  

                                 }
                                ?>
                                       <input type="text" class="form-control " name="Id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                             name="Image" placeholder="Upload Image" required >
                                    </div>
                                </div>
                               
                                <div class="form-group row" >
                                    <div class="col-sm-6 mb-3 mb-sm-0" >
                                        <input  type="text" name="Candidateemail" class="form-control" placeholder="Candidate Email" value="<?php echo $row[1];?>" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Candidateaddress" class="form-control" placeholder="Candidate Address" value="<?php echo $row[5];?>" required>
                                    </div>

                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="CandidateDOB" class="form-control" placeholder="DOB 01-01-0000" value="<?php echo $row[6];?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Candidatework" placeholder="Candidate Work" value="<?php echo $row[8];?>" required >
                                    </div>
                                </div>
                 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" name="Candidatephone" class="form-control" placeholder="Candidate Phone" value="<?php echo $row[3]; ?>"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Candidatename" placeholder="Candidate Name" value="<?php echo $row[4];?>" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                <textarea type="text" name="Aboutcandidate" class="form-control" placeholder="About Candidate" value="<?php echo $row[7];?>"> </textarea>
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
 include '../include/footer.php';
?>