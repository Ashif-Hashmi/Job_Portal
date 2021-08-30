<?php
$asdf=$_GET['proid'];
$canret=mysqli_query($con,"select * from workers where Worker_id='$asdf' ");
if(mysqli_affected_rows($con)>0){
    while($row=mysqli_fetch_row($canret)){
        ?>
         

<section class="w3l-blog-single">
    <div class="single blog">
        <div class="wrapper">
            <div class="d-grid grid-colunm-2">
                <!-- left side blog post content -->
                <div class="single-left">
                    <div class="box-grid">
                        <div class="single-left1 mb-0-imp"> 
                            <h5 class="card-title">About Worker </h5>
                            <p class=""><?php echo $row[7];?></p>
                            
                    </div>
                   
                   </div>
                   <div class="">
                    <aside class="posts single-left-inner">
                        <h5 class="card-title">Worker details</h5>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Worker Name</h4>
                                <p><?php echo $row[3];?></p>
                            </div>
                        </div>
            
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Location</h4>
                                <p><?php echo $row[4];?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-users"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Work Type</h4>
                                <p><?php echo $row[5];?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-users"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Work Experience</h4>
                                <p><?php echo $row[6];?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-envelope-open"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Email address</h4>
                                <p><a href="#"><?php echo $row[2];?></a></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Contact number</h4>
                                <p><a href="#"><?php echo $row[1];?></a></p>
                            </div>
                        </div>
                        <a href="#follow" class="follow">Contact Through Phone No & Gmail</a>
                    </aside>

                   
                </div>
                </div>
                <!-- left side blog post content -->

                <!-- right side bar -->
               
                <!-- //right side bar -->
            </div>
        </div>
    </div>
</section>
<?php
    }
}
else 'data not found'.mysqli_error($con);
?>