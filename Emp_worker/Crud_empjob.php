<?php
include 'include/conn.php';

if(isset($_POST['btnJobCat'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo    $Id=$_POST['Id'];
     echo    $Email=$_POST['Email'];
     echo    $Companyname=$_POST['Companyname'];
     echo   $Companyaddress=$_POST['Companyaddres'];
     echo   $Companywork=$_POST['Companywork'];
     echo   $Companyestd=$_POST['Companyestd'];
     echo   $NoofEmployes=$_POST['NoofEmployes'];
     echo   $JobName=$_POST['JobName'];
     echo   $TimeWork=$_POST['TimeWork'];
     echo   $AboutCompany=$_POST['AboutCompany'];
            
     echo   $filename='Assets/Image/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "INSERT INTO Company_details(Id,Email, Company_Name, Company_Address, Company_Work, ESTD, Company_Image, Createddate,NoofEmployes,Job_Name,Time_Work,About_Company) VALUES ('$Id','$Email', '$Companyname', '$Companyaddress', '$Companywork','$Companyestd', '$filename', now(),'$NoofEmployes','$JobName','$TimeWork','$AboutCompany')");
          if(mysqli_affected_rows($con)>0){
          
              header('location:viewempjob.php'); 
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

elseif(isset($_POST['btnupdateJob'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo    $Id=$_POST['Id'];
     echo    $Email=$_POST['Email'];
     echo    $Companyname=$_POST['Companyname'];
     echo   $Companyaddress=$_POST['Companyaddres'];
     echo   $Companywork=$_POST['Companywork'];
     echo   $Companyestd=$_POST['Companyestd'];
     echo   $NoofEmployes=$_POST['NoofEmployes'];
     echo   $JobName=$_POST['JobName'];
     echo   $TimeWork=$_POST['TimeWork'];
     echo   $AboutCompany=$_POST['AboutCompany'];
            
     echo   $filename='Assets/Image/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];
     if(move_uploaded_file($tmpname,$filename)){
      $query=mysqli_query($con,"update  Company_details set Email='$Email',Company_Name='$Companyname', Company_Address='$Companyaddress',Company_Work='$Companywork',ESTD='$Companyestd', Company_Image='$filename',NoofEmployes='$NoofEmployes',Job_Name='$JobName',Time_Work='$TimeWork',About_Company='$AboutCompany' where Id='$Id'");
  
      if(mysqli_affected_rows($con)>0){
          header('location:viewempjob.php');
      }
      else{
          echo 'Fail to insert'.mysqli_error($con);
       }
      }
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
