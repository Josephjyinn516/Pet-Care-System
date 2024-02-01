<?php
    include("conn.php");
    // $cusEmail = $_POST['cusEmail'];
    $id = intval($_GET['id']);
    $confirmPickup = "UPDATE `shoppingorder` SET `orderStatus`=2 WHERE `cartID`=$id";
    $completedPickup = mysqli_query($con,$confirmPickup);
    // echo"<script>alert('Successfully Placed Order!')</script>";
    mysqli_close($con);
    header("location:adminOrder.php");

?>