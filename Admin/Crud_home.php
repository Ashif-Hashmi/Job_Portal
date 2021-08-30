<?php
  include '../include/conn.php';

 if(isset($_POST['btnhome'])){
      if(isset($_FILES['Image'])){
       echo $filename=$_FILES['Image']['name']; 
       echo  $Id=$_POST['proid'];
       echo $Mainheading=$_POST['Mainheading'];
       echo $Subheading=$_POST['Subheading'];
       echo $Categoryname=$_POST['Categoryname'];
       echo $Catdes=$_POST['Categorydescription'];
       echo $filename='Assets/Image/'.$filename;
       echo $tmpname=$_FILES['Image']['tmp_name'];

          if(move_uploaded_file($tmpname,$filename)){
            $query=mysqli_query($con, "INSERT INTO home_setting(Id,MainHeading, SubHeading, CattegoryImage,CategoryName ,CategoryDescription) VALUES ('$Id','$Mainheading', '$Subheading', '$filename', '$Categoryname','$Catdes')");
            if(mysqli_affected_rows($con)>0){
                header('location:viewhome.php'); 
                
            }
            else{
                echo 'Data not inserted'.mysqli_error($con);
            }
          }
          else{
              echo 'not move file to folder'.mysqli_error($con);
          }
      }
      else{
          echo 'Image Not posted';
      }
  }
 
  else if(isset($_POST['updatebtnhome'])){
      if(isset($_FILES['Image'])){
           $Id=$_POST['proid'];
           $filename=$_FILES['Image']['name'];
           $Mainheading=$_POST['Mainheading'];
           $Subheading=$_POST['Subheading'];
           $Categoryname=$_POST['Categoryname'];
           $Catdes=$_POST['Categorydescription'];
           $filename='Assets/image/'.$filename;
           $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "update home_setting set MainHeading='$Mainheading', SubHeading='$Subheading', CattegoryImage='$filename',CategoryName='$Categoryname',
          CategoryDescription='$Catdes' where Id='$Id'");
          if(mysqli_affected_rows($con)>0){
              header('location:viewhome.php'); 
          }
          else{
              echo 'Data not inserted'.mysqli_error($con);
          }
        }
        else{
            echo 'can not move file to folder'.mysqli_error($con);
        }
    }
    else{
        echo 'Image Not posted';
    }
  }  
  else if(isset($_GET['proid'])){
    $proid=$_GET['proid'];
 
     $query=mysqli_query($con,"DELETE FROM home_setting WHERE Id='$proid'");
     if(mysqli_affected_rows($con)>0){
         header('location:viewhome.php');
     }
     else{
         echo 'Fail to insert';
     }
 }
   else{
       echo 'Data not inserted'; 
   }
  ?> 