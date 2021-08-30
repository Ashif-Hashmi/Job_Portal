<?php
include 'include/header.php';
include '../include/Conn.php';
?>
  <?php
$row="";
  $query=mysqli_query($con, "select * from blog");
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
	<section class="w3l-breadcrumns bg-white">
		<div class="wrapper">
			<ul>
				<li><a href="index.php">Home</a> <span class="fa fa-angle-double-right"></span></li>
				<li>Blog <span class="fa fa-angle-double-right"></span></li>
				<li>Blog page</li>
			</ul>
		</div>
	</section>

	<div class="w3l-grids-block-5">
		<!-- grids block 5 -->
		<section id="grids5-block">
			<h3 class="heading">Latest blog</h3>
			<div class="wrapper">
				<div class="d-grid">
					
				<?php
                  include 'retriveblog.php';
				?>
				
				
				</div>
			</div>
	</div>
	<!-- // grids block 5 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<?php
include 'include/footer.php';
?>