<?php
include 'include/header.php';
include 'include/conn.php';
?>
  <?php
$row="";
  $query=mysqli_query($con, "select * from workers");
  if(mysqli_affected_rows($con)>0){
	  $data=mysqli_fetch_array($query);
	  
  }
  else{

  }
  ?>
 

<section class="w3l-employer-detail-banner">
    <div class="wrapper">
        <div class="d-grid employer-grid">
          
          
         
        </div>
    </div>
</section>

<!-- Blog -->
<?php
include 'retriveworker-single.php';
?>
<!-- //blog single-->

<div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
	<!---728x90--->

</div>

<?php
include 'include/footer.php';
?>