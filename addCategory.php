<?php
if (isset($_POST["submitBtn"]))
{   
    include("conn.php");

    $sql = "INSERT INTO category (categoryName)
    VALUES ('$_POST[categorynm]')";

    if (!mysqli_query($con, $sql))
    {
        die("Error : ".mysqli_error($con));
    }
    else
    {
        echo '<script>alert("Category Added!");
        window.location.href = "adminShopPage.php";</script>';
    }
    mysqli_close($con);
}