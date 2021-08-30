<?php
include 'include/header.php';
include '../include/conn.php';
?>

<?php
$row="";
  $query=mysqli_query($con, "select * from home_job");
  if(mysqli_affected_rows($con)>0){
	  $data=mysqli_fetch_array($query);
	  
  }
  else{

  }
  ?>

<?php
$row="";
  $query=mysqli_query($con, "select * from home_setting");
  if(mysqli_affected_rows($con)>0){
	  $row=mysqli_fetch_array($query);
	  
  }
  else{

  }
  ?>
  <section class="w3l-cover-3">
		<div class="cover top-bottom">
			<div class="wrapper">
			<div class="middle-section text-center">
					<div class="section-width">
						<h2><?php echo $row[1];?>
						</h2>
						<p><?php echo $row[2];?></p>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- //companies20 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>

	<!-- w3l-covers-14 -->
	
	<!-- w3l-covers-14 -->
	<section class="w3l-price-2">
		<div class="price-main">
			<h3 class="heading">Featured Jobs</h3>
			<div class="wrapper">
				<div class="pricing-style-w3ls">
					<div class="full text-center">
						<label class="toggler toggler--is-active" id="filt-monthly">Recent Jobs</label>
						<div class="toggle" id="switcher"></div>
						<label class="toggler" id="filt-hourly">Updated Jobs</label>
					</div>
					<div id="monthly" class="">
						<div class="pricing-chart">
						<?php
                            include 'retrivehome_job.php'
						?>
							
							
						</div>
					</div>
					<div id="hourly" class="hide">
						<div class="pricing-chart">
						<?php
                            include 'retrivehome_job.php'
						?>

							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="w3l-covers-14">
		<div id="covers14-block">
			<div class="wrapper">
				<div class="covers14-text">
					<h4>Your Dream Jobs Are Waiting </h4>
					<p>Over 2.5 million interactions, 30,000 success stories Make yours now.</p>
				
				</div>
			</div>
		</div>
	</section>
	<script>
		var e = document.getElementById("filt-monthly"),
			d = document.getElementById("filt-hourly"),
			t = document.getElementById("switcher"),
			m = document.getElementById("monthly"),
			y = document.getElementById("hourly");

		e.addEventListener("click", function () {
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});

		d.addEventListener("click", function () {
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});

		t.addEventListener("click", function () {
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		})
	</script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>

	<!-- w3l-content-photo-5 -->
	<div class="w3l-content-photo-5">
		<div class="content">
			<div class="wrapper">
				<div class="d-grid">
					<div class="content-left">
						<h3>Importance of Job</h3>
						<p>You now know that job descriptions are critical. This means that great care needs to be taken in creating them and keeping them up to date.
							While the information in a job description will vary widely by role and industry type, there are a couple of essential items that you definitely cannot forget. Paul Slezak, a writer for Recruitloop.com, lists five areas that should always be included when writing job descriptions:</p>
					
					</div>
					<div class="content-photo">
						<a href="#link"><img src="assets/images/b5.jpg" class="img-responsive" alt="content-photo"></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- //w3l-content-photo-5 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>

	<div class="w3l-grids-block-5">
		<!-- grids block 5 -->
		<section id="grids5-block">
			<h3 class="heading">Popular Category</h3>
			<div class="wrapper">
				<div class="d-grid">
					
					
				<?php
                      include 'retrivehome.php';
                 ?>
				</div>
			</div>
		</section>
	</div>
	<!-- // grids block 5 -->

	<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
		<!---728x90--->

	</div>
	<!-- app-4 -->
	<section class="w3l-app-launch-4">
		<div id="app4-block">
			<div class="wrapper">
				<div class="d-grid parent-flex">
					<div class="app4-left-text">
						<h4>Easy Way to Find Job</h4>
					
						<p>1. Ask your network for referrals. <br>
                          2. Contact companies directly. <br>
                           3. Use job search platforms. <br>
                           4. Go to job fairs. <br>
                           5. Leverage social media. <br>
                           6. UseInquire at staffing agencies</p>
						<div class="d-flex app-4-connection">
							
							<div class="app-4-icon">
								<ul>
									<li><a href="#" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"
												aria-hidden="true"></span></a></li>
									<li><a href="#" title="Google play" class="app-icon play-vv"><span
												class="fa fa-play" aria-hidden="true"></span></a></li>
									<li><a href="#" title="Microsoft" class="app-icon windows-vv"><span
												class="fa fa-windows" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="app4-right-image">
						<img src="assets/images/mobile.jpg" class="img-responsive" alt="App Device" />
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
include 'include/footer.php';
?>
	