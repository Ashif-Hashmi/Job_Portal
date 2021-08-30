<?php
  include '../include/conn.php';

  if(isset($_POST['btnblog'])){
      if(isset($_FILES['Image'])){
        echo  $filename=$_FILES['Image']['name'];  
        echo  $Id=$_POST['proid'];
        echo  $Mainheading=$_POST['Mainheading'];
        echo  $description=$_POST['description'];

          $filename='Assets/images/'.$filename;
          $tmpname=$_FILES['Image']['tmp_name'];

          if(move_uploaded_file($tmpname,$filename)){
            $query=mysqli_query($con, "INSERT INTO blog(Id, Mainheading, Discription, Image) VALUES ('$Id', '$Mainheading', '$description', '$filename')");
            if(mysqli_affected_rows($con)>0){
                header('location:viewblog.php'); 
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
 
  else if(isset($_POST['updatebtnblog'])){
    if(isset($_FILES['Image'])){
        echo  $filename=$_FILES['Image']['name'];  
        echo  $Id=$_POST['proid'];
        echo  $Mainheading=$_POST['Mainheading'];
        echo  $description=$_POST['description'];

          $filename='Assets/images/'.$filename;
          $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "update blog set Mainheading='$Mainheading',    discription='$description', Image='$filename' where Id='$Id'");
          if(mysqli_affected_rows($con)>0){
              header('location:viewblog.php'); 
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

    $query=mysqli_query($con,"DELETE FROM blog WHERE Id='$proid'");
    if(mysqli_affected_rows($con)>0){
        header('location:viewprogrames.php');
    }
    else{
        echo 'Fail to insert';
    }
}
  else{
      echo 'Data not inserted'; 
  }
?>