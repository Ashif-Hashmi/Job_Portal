<?php
session_start();
 $userid=$_SESSION['Email'];
 include 'include/conn.php';
$query=mysqli_query($con,"update employer_tbl set  where emailid='$userid'");
if(mysqli_affected_rows($con)>0){
    session_destroy();          
    
    header('location:index.php');   
}                               
else{
    echo 'Fail to destroy session'.mysqli_error($con);


}
?>      