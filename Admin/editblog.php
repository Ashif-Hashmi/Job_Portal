<?php
include '../include/header.php';
include '../include/sidebar.php';
include '../include/conn.php';
?>
 <section id="main-content"> 
<section class="wrapper">
<h1 class="h3 mb-4 text-gray-800">Edit Blog</h1>
<form class="user" method="post" action="Crud_blog.php" enctype="multipart/form-data">
                             <div class="form-group row">
                                    
                                <div class="col-sm-6">
                                <?php
                                $catid=$_GET['proid'];
                                   $query=mysqli_query($con,"select * from blog where Id='$catid' ");
                                   if(mysqli_affected_rows($con)>0){
                                   $row=mysqli_fetch_array($query);
                                   }
                                ?>
                                        <input type="text" class="form-control " name="proid" value="<?php echo $catid; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control "
                                            id="exampleRepeatPassword" name="Image" value="<?php echo $row[3];?>" placeholder="Category Image *" required >
                                    </div>
                                </div>
                               
                               
                                 
                                 <div class="form-group row" >
                                    <div class="col-sm-6 mb-3 mb-sm-0" >
                                        <input type="text" name="Mainheading" value="<?php echo $row[1];?>"class="form-control" placeholder="Main Heading"  required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <textarea type="text" name="description" value="<?php echo $row[2];?>"class="form-control" placeholder="Category description"  required> </textarea>
                                    </div>
                                </div>
                               
                               
                                <button type="submit" class="btn btn-danger btn-user btn-block" name="updatebtnblog">
                                 Edit Blog
                                </button>
                                <hr>
                                
                            </form>

</section>			
<?php
include '../include/footer.php';
?>