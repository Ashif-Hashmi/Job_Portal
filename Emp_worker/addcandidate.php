<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Add Candidate Details</h1>
<form class="user" method="post" action="Crud_candidate.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from add_candidate order by Candidate_id desc limit 1 ");
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
                                   $proid="ADDCAN0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Candidateid" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                            id="exampleRepeatPassword" name="Image" placeholder="Candidate Image" required >
                                    </div>
                                </div>
                               
                                <div class="form-group row" >
                                    <div class="col-sm-6 mb-3 mb-sm-0" >
                                        <input  type="text" name="Candidatename" class="form-control" placeholder="Candidate Name"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Candidatework" class="form-control" placeholder="Candidate Work Type"  required>
                                    </div>
                                </div> 
                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnaddcan">
                                  Add Candidate
                                </button>
                                <hr>
                                
                            </form>

</section>			
<?php
include 'include/footer.php';
?>