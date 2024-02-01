<?php
include("conn.php");
$name = $_POST['productName'];
$image = $_POST['productImage'];
$price = $_POST['productPrice'];
$category = $_POST['productCategory'];

$sql = "INSERT INTO product (productName, productImage, productPrice, categoryName)
    VALUES ('$name', '$image', '$price', '$category')";

$itemAdded = mysqli_query($con,$sql);
echo '<script>alert("1 Product Added!");
window.location.href = "adminShopPage.php";</script>';
?>