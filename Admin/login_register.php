<?php
session_start();
  include '../include/conn.php';
  if(isset($_POST['btnlogin'])){
    $userid= $_POST['Email'];
    $password= $_POST['Password'];
    $query=mysqli_query($con,"select * from admin_tbl where EmailId='$userid' and Password='$password'");
    if(mysqli_affected_rows($con)>0){
        $query1=mysqli_query($con,"update admin_tbl set Login_status=1 where EmailId='$userid'");
        if(mysqli_affected_rows($con)>0){
            $_SESSION['Email']=$userid;
            header('location:Dashboard.php');
        }
        else{
            echo 'You have already login to other system'.mysqli_error($con);
        }
    }
    else{
     header('location:index.php');
     
    }
  }
?>