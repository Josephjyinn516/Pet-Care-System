<?php
include("conn.php");
$id = intval($_GET['id']);
$sql = "DELETE FROM appointment WHERE appointmentID = $id";
$result = mysqli_query($con, $sql);
header("location:popup.php");
?>