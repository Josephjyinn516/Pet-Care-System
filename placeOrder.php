<?php
    include("conn.php");
    $cusEmail = $_POST['cusEmail'];
    $orderQuery = "UPDATE `shoppingorder` SET `orderStatus`=1 WHERE `emailAddress`='$cusEmail' AND `orderStatus`=0";
    $orderPlaced = mysqli_query($con,$orderQuery);
    // echo"<script>alert('Successfully Placed Order!')</script>";
    mysqli_close($con);
    header("location:orderSummary.php");
?>
