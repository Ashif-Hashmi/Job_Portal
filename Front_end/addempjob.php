<?php
include 'include/header.php';

include 'include/conn.php';
?>
<style>
    a{
        
        color:blue;
        float:right;
    }
</style>
<!--main content start-->
<section class="w3l-inner-banner">
		<div class="wrapper">
		</div>
	</section>
    <div class="container">
    <br>  
<h1 class="h3 mb-4 text-gray-800">Add Company Details  <span> <a href="../Emp_worker/viewempjob.php">Edit Details</a></span></h1> 

<form class="user" method="post" action="Crud_empjob.php" enctype="multipart/form-data">
                            <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from Company_details order by Id desc limit 1 ");
                                if(mysqli_affected_rows($con)>0){
                                  $row=mysqli_fetch_array($query);
                                  $cid=$row[0];
                                  $part1=substr($cid,0,10);
                                  $part2=substr($cid,10);
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
                                   $proid="COMPDETAIL0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Id" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="NoofEmployes" class="form-control" placeholder="No of Employees"  required>
                                    </div>
                                </div>
                               
                               
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Email" class="form-control" placeholder="Email Id"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                            id="exampleRepeatPassword" name="Image" required >
                                    </div>
                                </div>
                 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Companyname" class="form-control" placeholder="Company Name"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Companyaddres" placeholder="Company Address" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Companywork" class="form-control" placeholder="Company Work"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Companyestd" placeholder="Company ESTD" required >
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="JobName" class="form-control" placeholder="Job Name"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="TimeWork" class="form-control" placeholder="Time Work"  required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                   
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control "
                                            id="exampleRepeatPassword" name="AboutCompany" placeholder="About Company" required > </textarea>
                                    </div>
                                </div>

                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnJobCat">
                                  Add Company Details
                                </button> <br>
                                
                                <hr>
                                
                            </form>
                        
                                </div>		
<?php
include 'include/footer.php';
?>