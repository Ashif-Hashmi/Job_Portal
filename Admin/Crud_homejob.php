<?php
include '../include/conn.php';

if(isset($_POST['addhomejob'])){
  echo $Id=$_POST['proid'];
  echo $Jobname=$_POST['Jobname'];
  echo $Jobaddress=$_POST['Jobaddress'];
  echo $Worktype=$_POST['Worktype'];
  echo $Worktiming=$_POST['Worktiming'];
  echo $Releasejob=$_POST['Releasejob'];

   $query=mysqli_query($con,"insert into home_job(Id,Job_name,Job_address,Work_type,Work_time,Release_Job)values('$Id','$Jobname','$Jobaddress','$Worktype','$Worktiming','$Releasejob')");

   if(mysqli_affected_rows($con)>0){
       header('location:viewhome_job.php');
   }
   else{
       echo 'Fail to insert'.mysqli_error($con);
   }
}

if(isset($_POST['updateaddhomejob'])){
  echo $Id=$_POST['proid'];
  echo $Jobname=$_POST['Jobname'];
  echo $Jobaddress=$_POST['Jobaddress'];
  echo $Worktype=$_POST['Worktype'];
  echo $Worktiming=$_POST['Worktiming'];
  echo $Releasejob=$_POST['Releasejob'];

    $query=mysqli_query($con,"update  category set Job_name='$Jobname',Job_address='$Jobaddress',Work_type='$Worktype',Work_time='$Worktiming',Release_Job='$Releasejob' where Id='$Id'");

    if(mysqli_affected_rows($con)>0){
        header('location:viewhome_job.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
}

if(isset($_GET['catid'])){
    $catid=$_GET['catid'];

    $query=mysqli_query($con,"delete  from category where category_id='$catid'");

    if(mysqli_affected_rows($con)>0){
        header('location:viewcategory.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
  }
?>
