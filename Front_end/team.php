<?php
include 'include/header.php';
include 'include/conn.php';
?>
  <?php
$row="";
  $query=mysqli_query($con, "select * from add_company");
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
				
			</ul>
		</div>
	</section>
	<!-- teams 29 block -->
	<section class="w3l-teams-29-main">
		<div class="teams-29">
			<h3 class="heading">Companies</h3>
		
			<div class="wrapper">
				<div class="d-grid align-center main-contteam-29">
				
				<?php
                  include 'retiveteam.php';
				?>
					
				</div>
			</div>
		</div>
	</section>
	<!-- //teams 29 block -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<?php
include 'include/footer.php';
?>