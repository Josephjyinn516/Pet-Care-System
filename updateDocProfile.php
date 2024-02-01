<?php
session_start();
include("conn.php");
$docEmail=$_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM doctor WHERE docEmail=$docEmail");


if(isset($_POST['submitDoc'])){
    $docName=$_POST['docName'];
    $docIC=$_POST['docIC'];
    $docAge=$_POST['docAge'];
    $docGender=$_POST['docGender'];
    $docHP=$_POST['docHP'];
    $docPassword=$_POST['docPassword'];


    $sql = "UPDATE `doctor` SET `docName`='$docName',`docIC`='$docIC',`docAge`=$docAge,`docGender`='$docGender',`docHP`='$docHP' ,`docPassword`='$docPassword' WHERE `docEmail` = '$docEmail'";
    $result=mysqli_query($con, $sql);
    if($result){
        echo '<script>alert("updated successfully!");window.location.href="http://localhost/FYP/viewDoctor.php";</script>';
    }
    else {
        die(mysqli_error($con));
    }
}