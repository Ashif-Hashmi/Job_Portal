<?php
include 'include/conn.php';

if(isset($_POST['btnaddworker'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo    $Workerid=$_POST['Workerid'];
     echo   $Workername=$_POST['Workername'];
  
     echo   $filename='Assets/Image/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "INSERT INTO add_worker(Worker_id,Worker_name, Worker_image, Createddate) VALUES ('$Workerid','$Workername','$filename',now())");
          if(mysqli_affected_rows($con)>0){
        // echo 'insert';
             header('location:viewaddworker.php'); 
          }
          else{
              echo 'Data not inserted'.mysqli_error($con);
          }
        }
        else{
            echo 'can not move file to folder';
        }
    }
    else{
        echo 'Image Not posted';
    }
}
?>