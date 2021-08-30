<?php
$asdf=$_GET['proid'];
$canret=mysqli_query($con,"select * from emp_candidate where Candidate_id='$asdf' ");
if(mysqli_affected_rows($con)>0){
    while($row=mysqli_fetch_row($canret)){
        ?>
        <section class="w3l-employer-detail-banner">
        <div class="wrapper">
            <div class="d-grid employer-grid">
                <div class="employer-title">
                    <img src="../Emp_worker/<?php echo $row[2];?>" style="width:300px"; alt="" />
                </div>
                <div class="employer-name">
                    <h4><?php echo $row[4];?></h4>
                    <p><?php echo $row[8];?></p>
                </div>
                <div class="employer-apply">
                    <a href="#facebook" class="facebook"> <span class="fa fa-facebook-square"></span> </a>
                    <a href="#facebook" class="twitter"> <span class="fa fa-twitter-square"></span> </a>
                    <a href="#linkedin" class="linkedin"> <span class="fa fa-linkedin-square"></span> </a>
                </div>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- Blog -->
    <section class="w3l-blog-single">
        <div class="single blog">
            <div class="wrapper">
                <div class="d-grid grid-colunm-2">
                    <!-- left side blog post content -->
                    <div class="single-left">
                        <div class="box-grid">
                            <div class="single-left1 mb-0-imp">
                                <h5 class="card-title">About Me </h5>
                                <p class=""> <?php echo $row[7];?></p>
                            </div>
                        </div>
                       
                        <div class="">
                        <aside class="posts single-left-inner">
                            <h5 class="card-title">Candidate details</h5>
                            <div class="d-grid employer-detail">
                                <div class="icon-employer">
                                    <span class="fa fa-calendar"></span>
                                </div>
                                <div class="detail-employer">
                                    <h4>Date of birth </h4>
                                    <p><?php echo $row[6];?></p>
                                </div>
                            </div>
                            <div class="d-grid employer-detail">
                                <div class="icon-employer">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="detail-employer">
                                    <h4>Location</h4>
                                    <p><?php echo $row[5];?></p>
                                </div>
                            </div>
                          
                            <div class="d-grid employer-detail">
                                <div class="icon-employer">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="detail-employer">
                                    <h4>Email address</h4>
                                    <p><a href="#"><?php echo $row[1];?></a></p>
                                </div>
                            </div>
                            <div class="d-grid employer-detail">
                                <div class="icon-employer">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="detail-employer">
                                    <h4>Download Resume</h4>
                                    <p><a href="#">mail@example.com</a></p>
                                </div>
                            </div>
                            <div class="d-grid employer-detail">
                                <div class="icon-employer">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="detail-employer">
                                    <h4>Contact number</h4>
                                    <p><a href="#"><?php echo $row[3];?></a></p>
                                </div>
                            </div>
                            <a href="#follow" class="follow">Save Resume</a>
                        
                      
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