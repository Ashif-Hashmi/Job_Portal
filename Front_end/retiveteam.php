<?php
$teamret=mysqli_query($con,"select * from company_details order by Id ");
if(mysqli_affected_rows($con)>0){
    while($data=mysqli_fetch_row($teamret)){
        ?>
			<div class="team-main-29">
						<div class="column-29">
							
							<img class="img-responsive" src="../Admin/<?php echo $data[6]?>" style="height:200px;">
							<div class="right-team-9">
								<h6><a href="#" class="title-team-29"><?php echo $data[2];?></a></h6>
							</div>
							<a href="team-single.php?catid=<?php echo $data[0]; ?>" class="follow">More Info</a>
						</div>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						</ul>
		    </div>

			
                    
<?php
    }
}
else{
	echo 'data not found'.mysqli_error($con);
}
?>