<?php
$asdf=$_GET['catid'];
$teamsingleret=mysqli_query($con,"select * from company_details where Id='$asdf' ");
if(mysqli_affected_rows($con)>0){
    while($data=mysqli_fetch_row($teamsingleret)){
        ?>

<section class="w3l-employer-detail-banner">
    <div class="wrapper">
        <div class="d-grid employer-grid">
            <div class="employer-title"> 
                <img src="../Admin/<?php echo $data[6]?>" style="width:300px;" />
            </div>
            <div class="employer-name">
                <h4><?php echo $data[2]?></h4>
                
            </div>
            <div class="employer-apply">
                <a href="#facebook" class="facebook"> <span class="fa fa-facebook-square"></span> </a>
                <a href="#facebook" class="twitter"> <span class="fa fa-twitter-square"></span> </a>
                <a href="#linkedin" class="linkedin"> <span class="fa fa-linkedin-square"></span> </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="w3l-blog-single">
    <div class="single blog">
        <div class="wrapper">
            <div class="d-grid grid-colunm-2">
                <!-- left side blog post content -->
                <div class="single-left">
                    <div class="box-grid">
                        <div class="single-left1 mb-0-imp">
                            <h5 class="card-title">About Company </h5>
                            <p class=""><?php echo $data[10]?></p>
                           
                        </div>
                    </div>
                    <h5 class="card-title position-margin">Open positions </h5>
                    <div class="w3l-price-2">
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                <div class="column1">
                                    <a href="#img5">
                                        <img src="assets/images/job4.png" width="60px" alt="" class="img-responsive" />
                                    </a>
                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="#link"><?php echo $data[4]?></a></h6>
                                        <ul class="location">
                                          
                                            <li><span class="fa fa-briefcase"></span> <?php echo $data[8]?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column2">
                                    <p><Strong>Working Time :</Strong><?php echo $data[9]?></p>
                                    <p><Strong>Job Post :</Strong>7 days ago</p>
                                </div>
                                <div class="column3 text-right">
                                    <a href="job-single.php" class="actionbg">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <!-- left side blog post content -->

                <!-- right side bar -->
                <div class="right-side-bar">
                    <aside class="posts single-left-inner">
                        <h5 class="card-title">Company details</h5>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-briefcase"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>ESTD</h4>
                                <p><?php echo $data[5]?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Location</h4>
                                <p><?php echo $data[3]?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-users"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Employees</h4>
                                <p><?php echo $data[7]?></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-envelope-open"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Email address</h4>
                                <p><a href="#"><?php echo $data[1]?></a></p>
                            </div>
                        </div>
                        <div class="d-grid employer-detail">
                            <div class="icon-employer">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="detail-employer">
                                <h4>Contact number</h4>
                                <p><a href="#">+(21) 333 444 5566</a></p>
                            </div>
                        </div>
                        <a href="#follow" class="follow">follow</a>
                    </aside>

                  
                </div>
                <!-- //right side bar -->
            </div>
        </div>
    </div>
</section>
<?php
    }
}
else{
	echo 'data not found'.mysqli_error($con);
}
?>