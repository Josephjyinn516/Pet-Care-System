<?php
include("conn.php");
$id = intval($_GET['id']);
$sql = "DELETE FROM category WHERE categoryID = $id";
$result = mysqli_query($con, $sql);
header("location:adminShopPage.php");
?>