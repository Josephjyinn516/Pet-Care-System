<?php
session_start();
include("conn.php");
$cusEmail=$_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM customer WHERE cusEmail=$cusEmail");


if(isset($_POST['submitUser'])){
    $cusName=$_POST['name'];
    $cusIC=$_POST['ic'];
    $cusAge=$_POST['age'];
    $cusGender=$_POST['gender'];
    $cusHP=$_POST['hp'];
    $petName=$_POST['petName'];
    $petSpecies=$_POST['species'];
    $petBreed=$_POST['breed'];
    $petGender=$_POST['petGender'];
    $petColour=$_POST['color'];
    $cusPassword=$_POST['password'];


    $sql = "UPDATE `customer` SET `cusName`='$cusName',`cusIC`='$cusIC',`cusAge`=$cusAge,`cusGender`='$cusGender',`cusHP`='$cusHP' ,`cusPassword`='$cusPassword',`petName`='$petName',`petSpecies`='$petSpecies',`petBreed`='$petBreed',`petGender`='$petGender',`petColour`='$petColour' WHERE `cusEmail` = '$cusEmail'";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "updated successfully";
        header('location:viewUser.php');
    }
    else {
        die(mysqli_error($con));
    }
}