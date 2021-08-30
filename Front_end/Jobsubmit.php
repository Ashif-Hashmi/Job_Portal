<?php
include 'include/header.php';

include 'include/conn.php';
?>
<style>
    .btn{
        color:White;
        background:black;
        bold: 200px;
        width:100%;
    }
</style>
<!--main content start-->
<section class="w3l-inner-banner">
		<div class="wrapper">
		</div>
	</section>
    <div class="container">
    <br>  
  
<h1 class="h3 mb-4 text-gray-800">Job Apply</h1> 
                        <form action="Crud_Jobapply.php" method="post" class="employer-contact">
                            <input type="text" name="name" placeholder="Your name" />
                            <input type="email" name="email" placeholder="Your email" />
                            <input type="text" name="address" placeholder="Enter Address" />
                            <input type="text" name="phone" placeholder="Enter Contact No" />
                            <textarea type="text" name="message"  placeholder="Your message">
                            </textarea>
                            <button type="submit" name="jobapply" class="btn">SUBMIT</button>
                        </form> <br>
                        <?php
                        if(! empty($_GET['res'])){
                            $res=$_GET['res'];
                            if($res==1){
                                ?>
                                <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Your Message has been Send Successfully !!!</strong>
                                </div>
                                <?php
                            }
                        }
                    ?>
</div>
<br><br><br><br><br>
<?php
include 'include/footer.php'; 
?>