<?php
include 'include/conn.php';

    if(isset($_POST['jobapply'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
        $address = $_POST['address'];
		$message = $_POST['message'];
 
		$query=mysqli_query($con,"insert into User_jobapply(Name,Email,Address,Phone,Message) values('$name','$email','$address','$phone','$message')");
		if(mysqli_affected_rows($con)>0){
			header('location:Jobsubmit.php?res=1');
		}
		else{
			echo 'Fail to insert'.mysqli_error($con);
		}
	}
   ?>