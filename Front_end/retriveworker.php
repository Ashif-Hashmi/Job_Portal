
<?php

$canret=mysqli_query($con,"select * from workers order by Worker_id ");
if(mysqli_affected_rows($con)>0){
    while($row=mysqli_fetch_row($canret)){
        ?>
		<div class="team-main-19">
						<div class="column-19">
						<!--	<a href=""><?php echo $row[4]?> </a> <!---image-->
						</div>
						<div class="right-team-9">
							<div class="sub-grid-33">
								<h5><a href="" class="title-team-33"><?php echo $row[3];?></a></h5>
								<p class="sm-text-33"><?php echo $row[1];?></p>
								<a href="worker-single.php?proid=<?php echo $row[0];?>"class="profile">View profile </a>
							</div>
							<div class="buttons-teams">
								<a href="#team"><span class="fa fa-facebook-square"></span></a>
								<a href="#team"><span class="fa fa-twitter-square"></span></a>
								<a href="#team"><span class="fa fa-linkedin-square"></span></a>
							</div>
						</div>
					</div>
	
					
<?php
    }
}
else 'data not found'.mysqli_error($con);
?>