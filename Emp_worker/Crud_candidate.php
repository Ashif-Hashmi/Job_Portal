<?php
include 'include/conn.php';

if(isset($_POST['btnaddcan'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo    $Candidateid=$_POST['Candidateid'];
     echo    $Candidatename=$_POST['Candidatename'];
     echo    $Candidatework=$_POST['Candidatework'];

    
     echo   $filename='Assets/images/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "INSERT INTO add_candidate(Candidate_id,Candidate_name, Candidate_work, Candidate_image,  Createddate) VALUES ('$Candidateid','$Candidatename', '$Candidatework', '$filename', now())");
          if(mysqli_affected_rows($con)>0){
         // echo 'insert';
             header('location:viewcandidate.php'); 
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
?>