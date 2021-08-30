<?php
$homeret=mysqli_query($con,"select * from home_job order by Id ");
if(mysqli_affected_rows($con)>0){
    while($data=mysqli_fetch_row($homeret)){
        ?>
			<div class="price-box btn-layout bt6">
								<div class="grid grid-column-2">
									<div class="column1">
										<a href="#img5">
											
										</a>
										<div class="job-info">
											<h6 class="pricehead"><a href="#link"><?php echo $data[1];?></a>
											</h6>
											<ul class="location">
												<li><span class="fa fa-map-marker"></span> <?php echo $data[2];?></li>
												<li><span class="fa fa-briefcase"></span><?php echo $data[3];?></li>
											</ul>
										</div>
									</div>
									<div class="column2">
										<p><Strong>Type :</Strong><?php echo $data[4];?></p>
										<p><Strong>Time :</Strong><?php echo $data[5];?></p>
									</div>
									<div class="column3 text-right">
										<a href="job-single.php" class="actionbg">Apply Now</a>
									</div>
								</div>
							</div>
<?php
    }
}
?>