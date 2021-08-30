<?php
$con=mysqli_connect("localhost","root","","portal_admin");
if(!$con){
    echo 'Fail to Established Connection'.mysqli_error($con);
}
?>