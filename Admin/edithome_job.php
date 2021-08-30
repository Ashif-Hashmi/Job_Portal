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
                                $catid=$_GET['catid'];
                                   $query=mysqli_query($con,"select * from home_job where Id='$catid' ");
                                   if(mysqli_affected_rows($con)>0){
                                   $row=mysqli_fetch_array($query);
                                   }
                                ?>
                                        <input type="text" class="form-control " name="proid" value="<?php echo $catid; ?>" readonly>
                                    </div>
                                    </div>
            
            <div class="form-group">
              <input type="text" class="form-control form-control-user "name="Jobname" value="<?php echo $row[1];?>" placeholder="Job Name" required autocomplete="off">
            </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Jobaddress" value="<?php echo $row[2];?>"  placeholder="Job Adress" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Worktype" value="<?php echo $row[3];?>"placeholder="Work Type" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Worktiming" value="<?php echo $row[4];?>"placeholder="Work Timing" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user"name="Releasejob" value="<?php echo $row[5];?>"placeholder="Release Job" required autocomplete="off">
        </div>
        
        <button type="submit" name="updateaddhomejob"  class="btn btn-danger btn-user btn-block">
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