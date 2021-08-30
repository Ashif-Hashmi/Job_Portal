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
<h1 class="h3 mb-4 text-gray-800">Workers Category  <span> <a href="../Emp_worker/viewworkerdetail.php">Edit Details</a></span></h1>
<form class="user" method="post" action="Crud_worker.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from workers order by Worker_id desc limit 1 ");
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
                                   $proid="ADWORK0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="Workerid" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                   
                                </div>
                               
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workername" class="form-control" placeholder="Worker Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workerwork" placeholder="Worke Type *" required >
                                    </div>
                                </div>  
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workerphone" class="form-control" placeholder="Worker Phone No *">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workeremail" placeholder="Worker Email *" required >
                                    </div>
                                </div>  
                                <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="Workeraddress" class="form-control" placeholder="Worker Address *">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control "
                                            id="exampleRepeatPassword" name="Workerexperience" placeholder="Worker Experience *" required >
                                    </div>
                                </div> 
                                <div class="form-group row" >
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea type="text" name="Aboutworker" class="form-control" placeholder="About Worker*"></textarea>
                                    </div> 
                                    </div>
                                 
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnworker">
                                  Add Worker Details
                                </button>
                                <hr>
                                
                            </form>
                            </div>
	
<?php
include 'include/footer.php';
?>