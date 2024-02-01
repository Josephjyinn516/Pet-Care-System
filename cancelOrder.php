<?php 
    include("conn.php");
    $cusEmail = $_POST['cusEmail'];
    $id = intval($_GET['id']);
    // $cancelOrder = "DELETE FROM `shoppingorder` WHERE `emailAddress`='$cusEmail' AND `cartID`=$id AND `orderStatus`=1";
    $cancelOrder = "UPDATE `shoppingorder` SET `orderStatus`=3 WHERE `cartID`=$id";
    $pickupCanceled = mysqli_query($con,$cancelOrder);
    // echo"<script>alert('Successfully Placed Order!')</script>";
    mysqli_close($con);
    header("location:adminOrder.php");

?>