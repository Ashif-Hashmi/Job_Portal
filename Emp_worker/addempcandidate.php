<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Add Candidate Details</h1>
<form class="user" method="post" action="Crud_empcandidate.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from emp_candidate order by Candidate_id desc limit 1 ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                  $cid=$row[0];
                                  $part1=substr($cid,0,6);
                                  $part2=substr($cid,6);
                                  if($part2<9){
                                     $part2++;
                                     $proid=$part1.'000'.$part2;
                                  }
                                  else if($part2<99){
                                    $part2++;
                                    $proid=$part1.'00'.$part2;
                                 }
                                else if($part2<999){
                                    $part2++;
                                    $proid=$part1.'0'.$part2;
                                  }
                                 }
                                 else{
                                   $proid="EMPCAN0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Candidateid" value="<?php echo $proid; ?>" readonly>
                                       
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                             name="Image" placeholder="Upload Image" required >
                                    </div>
                                </div>
                               
                                <div class="form-group row" >
                                    <div class="col-sm-6 mb-3 mb-sm-0" >
                                        <input  type="text" name="Candidateemail" class="form-control" placeholder="Candidate Email"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Candidateaddress" class="form-control" placeholder="Candidate Address"  required>
                                    </div>

                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="CandidateDOB" class="form-control" placeholder="DOB 01-01-0000"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Candidatework" placeholder="Candidate Work" required >
                                    </div>
                                </div>
                 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" name="Candidatephone" class="form-control" placeholder="Candidate Phone"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Candidatename" placeholder="Candidate Name" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                <textarea type="text" name="Aboutcandidate" class="form-control" placeholder="About Candidate"></textarea>
                                    </div> 
                                    
                                </div>

                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnempcand">
                                  Add Candidate Details
                                </button>
                                <hr>
                                
                            </form>

</section>			
<?php
include 'include/footer.php';
?>