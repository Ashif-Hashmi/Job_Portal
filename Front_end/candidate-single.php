<?php
include 'include/header.php';
include 'include/conn.php';

?>
<?php
$row="";
  $query=mysqli_query($con, "select * from emp_candidates");
  if(mysqli_affected_rows($con)>0){
	  $data=mysqli_fetch_array($query);
	  
  }
  else{

  }
  ?>

  <?php
     include 'retrivecandidate-single.php';
  ?>
    <!-- //blog single-->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>

    <?php
include 'include/footer.php';
?>