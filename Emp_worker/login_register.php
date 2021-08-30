<?php
session_start();
  include 'include/conn.php';
  if(isset($_POST['btnlogin1'])){
    $username= $_POST['Name'];
     $userid= $_POST['Email'];
    $phoneno= $_POST['Phone'];
    $password= $_POST['Password'];
    $OTP=round(rand(100000,999999));
    
    
      $query=mysqli_query($con,"insert into employer_tbl(username,emailid, phoneno, password, modified, OTP) values('$username','$userid','$phoneno','$password',now(),'$OTP')");
        if(mysqli_affected_rows($con)>0){
          header('location:index.php');
        //echo 'data insertd';
    }
    else{
      echo mysqli_error($con);
    }

}
elseif(isset($_POST['btnlogin'])){
  echo $userid=$_POST['Email'];
  echo $password=$_POST['Password'];
  $query=mysqli_query($con,"select * from employer_tbl where (emailid='$userid' and password='$password')");
  if(mysqli_affected_rows($con)>0){
      $_SESSION['Email']=$email;
      header('location:Dashboard.php');
  }
  else{
      header('location:index.php');
      
  }
}
else{
   echo'Do not posted';
}
?>