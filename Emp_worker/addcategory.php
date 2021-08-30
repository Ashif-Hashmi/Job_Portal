<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/conn.php';
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
        <form class="user" method="post" action="crud_category.php" enctype="multipart/form-data">
        <div class="form-group">
         <?php
            $catid="";
            $query=mysqli_query($con,"select * from add_company order by Company_id desc limit 1");
            if(mysqli_affected_rows($con)>0){
            $row=mysqli_fetch_array($query);
            $cid=$row[0];
            $part1=substr($cid,0,6);
            $part2=substr($cid,6);
            if($part2<9){
                $part2++;
                $catid=$part1.'000'.$part2;
            }
            else if($part2<99){
                $part2++;
                $catid=$part1.'00'.$part2;
            }
            else if($part2<999){
                $part2++;
                $catid=$part1.'0'.$part2;
            }
            }
            else{
                 $catid="ADCOMP0001";
            }
        ?>
            <input type="text" class="form-control form-control-user"name="catid" readonly value="<?php echo$catid; ?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-user "name="CompanyName" placeholder="Company Name" required autocomplete="off">
            </div>

        <div class="form-group">
            <input type="file" class="form-control form-control-user"name="Image"placeholder="Image" required autocomplete="off">
        </div>
        
        <button type="submit" name="addcomp"  class="btn btn-danger btn-user btn-block">
            Add Company
        </button>
    </form>
    </div>
</div>
</div>
</div>
</section>
			
<?php
include 'include/footer.php';
?>