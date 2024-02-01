<?php
include("conn.php");
$id = intval($_GET['id']);
$deleteQuery = "DELETE FROM shoppingorder WHERE cartID=$id";
$delete = mysqli_query($con,$deleteQuery);
mysqli_close($con);
header("location:shopCart.php");
?>