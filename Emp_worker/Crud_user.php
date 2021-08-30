<?php
  include 'include/conn.php';

  if(isset($_POST['btnuser'])){
    echo $Id=$_POST['Id'];
    echo $Name=$_POST['Name'];
    echo $Email=$_POST['Email'];
    echo $Phone=$_POST['Phone'];
    echo $Address=$_POST['Address'];
    echo $Worktype=$_POST['Worktype'];
    
     $query=mysqli_query($con,"insert into normal_user(Id,Name,Email,Phone,Address,Worktype)values('$Id','$Name','$Email','$Phone','$Address','$Worktype')");

     if(mysqli_affected_rows($con)>0){
         header('location:viewuser.php');
     }
     else{
         echo 'Fail to insert'.mysqli_error($con);
     }
  }
  if(isset($_POST['updatebtnuser'])){
    echo $Id=$_POST['Id'];
    echo $Name=$_POST['Name'];
    echo $Email=$_POST['Email'];
    echo $Phone=$_POST['Phone'];
    echo $Address=$_POST['Address'];
    echo $Worktype=$_POST['Worktype'];

    $query=mysqli_query($con,"update  normal_user set Name='$Name',Email='$Email',Phone='$Phone',Address='$Address',Worktype='$Worktype' where Id='$Id'");

    if(mysqli_affected_rows($con)>0){
        header('location:viewuser.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }

  }
  if(isset($_GET['proid'])){
    $proid=$_GET['proid'];

    $query=mysqli_query($con,"delete  from normal_user where Id='$proid'");

    if(mysqli_affected_rows($con)>0){
        header('location:viewuser.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
  } 
?>
