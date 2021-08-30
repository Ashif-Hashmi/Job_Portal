<?php
include 'include/conn.php';

if(isset($_POST['btnempcand'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo    $Candidateid=$_POST['Candidateid'];
     echo    $Candidateemail=$_POST['Candidateemail'];
     echo    $Candidatephone=$_POST['Candidatephone'];
     echo   $Candidatename=$_POST['Candidatename'];
     echo   $Candidateaddress=$_POST['Candidateaddress'];
     echo   $CandidateDOB=$_POST['CandidateDOB'];
     echo   $Aboutcandidate=$_POST['Aboutcandidate'];
     echo   $Candidatework=$_POST['Candidatework'];
    
    
     echo   $filename='Assets/Image/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];

        if(move_uploaded_file($tmpname,$filename)){
          $query=mysqli_query($con, "INSERT INTO emp_candidate(Candidate_id,Candidate_email, Candidate_image, Candidate_phone, Candidate_name, Candidate_address,Candidate_DOB,About_candidate,Candidate_work, Createddate) VALUES ('$Candidateid','$Candidateemail', '$filename', '$Candidatephone', '$Candidatename','$Candidateaddress','$CandidateDOB',
          '$Aboutcandidate','$Candidatework', now())");
          if(mysqli_affected_rows($con)>0){
         // echo 'insert';
             header('location:viewempcandidate.php'); 
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
if(isset($_POST['btnupdateJob'])){
    if(isset($_FILES['Image'])){
     echo   $filename=$_FILES['Image']['name'];
     echo   $Candidateid=$_POST['Id'];
     echo    $Candidateemail=$_POST['Candidateemail'];
     echo    $Candidatephone=$_POST['Candidatephone'];
     echo   $Candidatename=$_POST['Candidatename'];
     echo   $Candidateaddress=$_POST['Candidateaddress'];
     echo   $CandidateDOB=$_POST['CandidateDOB'];
     echo   $Aboutcandidate=$_POST['Aboutcandidate'];
     echo   $Candidatework=$_POST['Candidatework'];
    
    
     echo   $filename='Assets/Image/'.$filename;
     echo   $tmpname=$_FILES['Image']['tmp_name'];
     if(move_uploaded_file($tmpname,$filename)){
      $query=mysqli_query($con,"update  emp_candidate set Candidate_email='$Candidateemail',Candidate_image='$filename', Candidate_phone='$Candidatephone',Candidate_name='$Candidatename',Candidate_address='$Candidateaddress', Candidate_DOB='$CandidateDOB',About_candidate='$Aboutcandidate',Candidate_work='$Candidatework'  where Candidate_id='$Candidateid'");
  
      if(mysqli_affected_rows($con)>0){
          header('location:viewempcandidate.php');
      }
      else{
          echo 'Fail to insert'.mysqli_error($con);
      }
  }
}

if(isset($_GET['proid'])){
    $catid=$_GET['proid'];

    $query=mysqli_query($con,"delete  from  emp_candidate where Candidate_id ='$catid'");

    if(mysqli_affected_rows($con)>0){
        header('location:viewempcandidate.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
  }
}
?>