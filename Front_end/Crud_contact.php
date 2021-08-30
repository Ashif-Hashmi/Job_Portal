<?php
 include 'include/conn.php';

    if(isset($_POST['insert'])){
		$email = $_POST['Email'];
		$name = $_POST['Name'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];
 
		$query=mysqli_query($con,"insert into contact(Email,Name,Subject,Message) values('$email','$name','$subject','$message')");
		if(mysqli_affected_rows($con)>0){
			header('location:contact.php?res=1');
		}
		else{
			echo 'Fail to insert'.mysqli_error($con);
		}
	}
   ?>