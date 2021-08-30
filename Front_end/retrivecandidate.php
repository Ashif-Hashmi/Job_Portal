<?php
$canret=mysqli_query($con,"select * from emp_candidate order by Candidate_id ");
if(mysqli_affected_rows($con)>0){
    while($row=mysqli_fetch_row($canret)){
        ?>
		<div class="team-main-19">
						<div class="column-19">
							<a href=""><img  src="../Emp_worker/<?php echo $row[2]?>" style="width:320px;height:250px;"></a>
						</div>
						<div class="right-team-9">
							<div class="sub-grid-33">
								<h5><a href="candidate-single.php" class="title-team-33"><?php echo $row[4];?></a></h5>
								<p class="sm-text-33"><?php echo $row[8];?></p>
								<a href="candidate-single.php?proid=<?php echo $row[0]; ?>"  class="profile">View profile </a>
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