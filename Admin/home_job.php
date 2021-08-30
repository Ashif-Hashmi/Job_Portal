<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../include/conn.php';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
     <h1 class="h2 mb-4 text-gray-800" style="text-align:center;">Add Job Category</h1>
     <div class="row">
       <div class="col-lg-2"></div>
        <div class="col-lg-8">
        <div class="p-8">
         <div class="text-center">
        </div>
        <form class="user" method="post" action="Crud_homejob.php" enctype="multipart/form-data">
                             <div class="form-group row">
                                    
                                <div class="col-sm-12">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from home_job order by Id desc limit 1 ");
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
                                   $proid="HOMJOB0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="proid" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    </div>
            
            <div class="form-group">
              <input type="text" class="form-control form-control-user "name="Jobname" placeholder="Job Name" required autocomplete="off">
            </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Jobaddress"placeholder="Job Adress" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Worktype"placeholder="Work Type" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Worktiming"placeholder="Work Timing" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Releasejob"placeholder="Release Job" required autocomplete="off">
        </div>
        
        <button type="submit" name="addhomejob"  class="btn btn-danger btn-user btn-block">
            Add Home Job
        </button>
    </form>
    </div>
</div>
</div>
</div>
</section>			
<?php
include '../include/footer.php';
?>