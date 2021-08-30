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
             header('location:viewworkerdetail.php'); 
          }
          else{
              echo 'Data not inserted'.mysqli_error($con);
          }
        }

        if(isset($_POST['btnworkerupdate'])){
   
          echo    $Workerid=$_POST['Id'];
          echo    $Workerphone=$_POST['Workerphone'];
          echo    $Workeremail=$_POST['Workeremail'];
          echo   $Workername=$_POST['Workername'];
          echo   $Workeraddress=$_POST['Workeraddress'];
          echo   $Workerwork=$_POST['Workerwork'];
          echo   $Workerexperience=$_POST['Workerexperience'];
          echo   $Aboutworker=$_POST['Aboutworker'];
        
            $query=mysqli_query($con,"update workers set Worker_phone='$Workerphone',Worker_email='$Workeremail', Worker_name='$Workername',Worker_address='$Workeraddress',Worker_experience='$Workerexperience', About_worker='$Aboutworker' where Worker_id='$Workerid'");
        
            if(mysqli_affected_rows($con)>0){
                header('location:viewworkerdetail.php');
            }
            else{
                echo 'Fail to insert'.mysqli_error($con);
            }
        }
      
      
      if(isset($_GET['proid'])){
          $catid=$_GET['proid'];
      
          $query=mysqli_query($con,"delete  from  Company_details where Id='$catid'");
      
          if(mysqli_affected_rows($con)>0){
              header('location:viewempjob.php');
          }
          else{
              echo 'Fail to insert'.mysqli_error($con);
          }
        }
?>