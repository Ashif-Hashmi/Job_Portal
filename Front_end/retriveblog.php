<?php
$homeret=mysqli_query($con,"select * from blog order by Id ");
if(mysqli_affected_rows($con)>0){
    while($data=mysqli_fetch_row($homeret)){
        ?>
			<div class="grids5-info">
						<a href=""><img  src="../Admin/<?php echo $data[3]?>"style="width:316px; height:280px;" ></a>
						<div class="blog-info">
							
							<h4><a href=""><?php echo $data[1];?></a></h4>
							<p><?php echo $data[2];?>
								viverra interdum.</p>
						</div>
					</div>
                    
<?php
    }
}
?>