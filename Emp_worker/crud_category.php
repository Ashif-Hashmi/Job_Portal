<?php
  include 'include/conn.php';

  if(isset($_POST['addcomp'])){
      if(isset($_FILES['Image'])){
        echo  $filename=$_FILES['Image']['name'];  
        echo  $Id=$_POST['catid'];
        echo  $CompanyName=$_POST['CompanyName'];

          $filename='Assets/images/'.$filename;
          $tmpname=$_FILES['Image']['tmp_name'];

          if(move_uploaded_file($tmpname,$filename)){
            $query=mysqli_query($con, "INSERT INTO add_company(Company_id, Company_name, Company_image) VALUES ('$Id', '$CompanyName','$filename')");
            if(mysqli_affected_rows($con)>0){
                header('location:viewcategory.php'); 
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
          echo 'Image Not posted'.mysqli_error($con);
      }
  }
 
  else if(isset($_POST['updatecomp'])){
    if(isset($_FILES['Image'])){
      echo  $filename=$_FILES['Image']['name'];  
      echo  $Id=$_POST['catid'];
      echo  $CompanyName=$_POST['CompanyName'];

        $filename='Assets/images/'.$filename;
        $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "update add_company set Company_name='$CompanyName',Company_image='$filename' where Company_id='$Id'");
          if(mysqli_affected_rows($con)>0){
              header('location:viewcategory.php'); 
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

 else if(isset($_GET['catid'])){
   $catid=$_GET['catid'];

    $query=mysqli_query($con,"DELETE FROM add_company WHERE Company_id='$catid'");
    if(mysqli_affected_rows($con)>0){
        header('location:viewcategory.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
}
  else{
      echo 'Data not inserted'; 
  }
?>