<?php
include("conn.php");
$id = intval($_GET['id']);
$sql = "UPDATE `appointment` SET `status`='1'WHERE `appointmentID`='$id'";
$result = mysqli_query($con, $sql);
header("location:admin_appointment.php");
?>