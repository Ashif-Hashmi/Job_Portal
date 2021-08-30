<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../include/conn.php';
?>
 <section id="main-content">
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Workers Category</h1>
<form class="user" method="post" action="Crud_blog.php" enctype="multipart/form-data">
                             <div class="form-group row">
                                    
                                <div class="col-sm-6">
                              <?php
                                $proid="";
                                $query=mysqli_query($con,"select * from blog order by Id desc limit 1 ");
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
                                   $proid="ADBLOG0001";
                                 }
                                ?>
                                        <input type="text" class="form-control " name="proid" value="<?php echo $proid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                            id="exampleRepeatPassword" name="Image" placeholder="Category Image *" required >
                                    </div>
                                </div>
                               
                                <div class="form-group row" >
                                    <div class="col-sm-6 mb-3 mb-sm-0" >
                                        <input type="text" name="Mainheading" class="form-control" placeholder="Main Heading"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <textarea type="text" name="description" class="form-control" placeholder="Category description"  required> </textarea>
                                    </div>
                                </div>
                               
                                
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="btnblog">
                                  Add Blog
                                </button>
                                <hr>
                                
                            </form>

</section>			
<?php
include '../include/footer.php';
?>