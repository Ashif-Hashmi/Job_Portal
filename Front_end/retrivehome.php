<?php
$homeret=mysqli_query($con,"select * from home_setting order by Id ");
if(mysqli_affected_rows($con)>0){
    while($row=mysqli_fetch_row($homeret)){
        ?>
		
			<div class="grids5-info">
		    <a href="blog-single.html"><img src="../Admin/<?php echo $row[3]?>"style="width:300px; height:300px;" ></a>
            <div class="blog-info">
			  <h4><a href="blog-single.html"><?php echo $row[4];?></a>
			  </h4>
			  <p><?php echo $row[5];?></p>
			</div>
		</div>
		
	
					
<?php
    }
}
?>