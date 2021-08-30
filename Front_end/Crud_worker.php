<?php
include 'include/conn.php';

if(isset($_POST['btnworker'])){
   
     echo    $Workerid=$_POST['Workerid'];
     echo    $Workerphone=$_POST['Workerphone'];
     echo    $Workeremail=$_POST['Workeremail'];
     echo   $Workername=$_POST['Workername'];
     echo   $Workeraddress=$_POST['Workeraddress'];
     echo   $Workerwork=$_POST['Workerwork'];
     echo   $Workerexperience=$_POST['Workerexperience'];
     echo   $Aboutworker=$_POST['Aboutworker'];

     $query=mysqli_query($con, "INSERT INTO workers(Worker_id,Worker_phone, Worker_email, Worker_name, Worker_address,  Worker_work,Worker_experience, About_worker, Createddate) VALUES ('$Workerid','$Workerphone', '$Workeremail', '$Workername', '$Workeraddress','$Workerwork','$Workerexperience','$Aboutworker', now())");
          if(mysqli_affected_rows($con)>0){
             header('location:worker.php'); 
          }
          else{
              echo 'Data not inserted'.mysqli_error($con);
          }
        }
?>