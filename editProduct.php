<?php
include("conn.php");

$editProduct = mysqli_query($con,"UPDATE `product` 
    SET `productName`='$_POST[productName]', 
    `productImage`='$_POST[productImage]', 
    `productPrice`='$_POST[productPrice]', 
    `categoryName` ='$_POST[productCategory]'
    WHERE `productID`='$_POST[productID]'");

echo '<script>alert("Made Changes to 1 Product!");
window.location.href = "adminShopPage.php";</script>';

?>