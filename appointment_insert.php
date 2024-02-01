<?php
if (isset($_POST["submitBtn"]))
{   
    $name = $_POST["cusName"];
    $sEmail = $_SESSION['email'];

    include("conn.php");

    $sql = "INSERT INTO appointment (cusName, cusHP, cusAddress, cusEmail, petName, petSpecies, petBreed, petGender, Location, serviceType, appointmentDate, appointmentTime, status, sessionEmail)
    VALUES ('$_POST[cusName]','$_POST[cusHP]','$_POST[cusAddress]','$_POST[cusEmail]',
    '$_POST[petName]','$_POST[petSpecies]','$_POST[petBreed]','$_POST[petGender]',
    '$_POST[Location]','$_POST[serviceType]','$_POST[appointmentDate]','$_POST[appointmentTime]', 0, '$sEmail')";

    if (!mysqli_query($con, $sql))
    {
        die("Error : ".mysqli_error($con));
    }
    else
    {
        echo '<script>alert("Appointment Submitted! Kindly wait for CaringOnes Staff to approve");
        window.location.href = "http://localhost/FYP/Services_After_Login.php";</script>';
    }
    mysqli_close($con);
}