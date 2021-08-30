<?php

include 'include/header.php';
include 'include/conn.php';
?>
  <?php
$row="";
  $query=mysqli_query($con, "select * from add_candidate");
  if(mysqli_affected_rows($con)>0){
	  $data=mysqli_fetch_array($query);
	  
  }
  else{

  }
  ?>
	<section class="w3l-inner-banner">
		<div class="wrapper">
		</div>
	</section>
	<section class="w3l-breadcrumns">
		<div class="wrapper">
			<ul>
				<li><a href="index.html">Home</a> <span class="fa fa-angle-double-right"></span></li>
				<li>Pages <span class="fa fa-angle-double-right"></span></li>
				<li>Candidates page</li>
				
			</ul>
		</div>
		
</section>
	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<!-- teams 33 block -->
	<section class="w3l-teams-33-main">
		<div class="teams-33">
			<h3 class="heading">Our Candidate</h3>
			<div class="wrapper">
				<div class="d-grid grid-col-3 align-center main-contteam-33">
					
                <?php
                  include 'retrivecandidate.php';
				?>

				</div>
			</div>
		</div>
	</section>
	<!-- //teams 33 block --> 

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<?php
include 'include/footer.php';
?>