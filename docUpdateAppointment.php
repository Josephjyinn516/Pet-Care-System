<?php
session_start();
include("conn.php");
$id = intval($_GET['id']);
$sql = "UPDATE appointment SET Status=2 WHERE appointmentID = $id";
$result = mysqli_query($con, $sql);

if($result){
    echo '<script>alert("Customer has done his/her appointment!");
    window.location.href="popup.php";
    </script>';

}
else {
    die(mysqli_error($con));
}

?>