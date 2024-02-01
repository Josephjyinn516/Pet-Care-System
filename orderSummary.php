<?php
    session_start();
    include("conn.php");
?>

<?php 
    if(isset($_SESSION['email'])){
    require_once("header.php");
    }else{
        require_once('b4header.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="shopCart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
</head>

<body>
<?php
    $cusEmail = $_SESSION['email'];
    // $cusEmail = "abc8017@mail.com";
    $sqlSummary = "SELECT A.productID, A.cartID, B.productID, B.productImage, B.productName, B.productPrice FROM shoppingorder AS A INNER JOIN product AS B ON A.productID=B.productID WHERE A.emailAddress='$cusEmail' AND A.orderStatus=1;";
    $summary = mysqli_query($con,$sqlSummary);
?>
<div class="cartPage">
    <h1 class="pageTitle">YOUR ORDER</h1>
    <div class="summaryTable">
        <table class="tableContainer" width="100%" align="center" cellpadding="10">
        <thead>
            <tr class="tableHead">
                <th class="summaryHeader" colspan="2">PRODUCTS</th>
                <!-- <th class="tableHeader" align="center" width="25%">PRICE</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0;
            $totalCount = 0;
            while($row = mysqli_fetch_array($summary)){ 
            ?>
                <form method="post">
                    <tr class="cartRow">
                        <td><img class="productImage" src="./Resources/<?= $row['productImage']?>"></td>
                        <td><?=$row['productName']?></td>
                        <!-- <td align="center">RM <?=$row['productPrice']?></td> -->
                        <?php 
                        $totalPrice = $totalPrice + $row['productPrice'];
                        $totalCount = $totalCount + 1;
                        ?>
                    </tr>
                </form>
            <?php
            }
        ?>
        </tbody>
        </table>
        <div class="summaryText">
            <p>Thank you for placing order for <?=$totalCount?> products with CaringOnes.</p>
            <p>Click <a href="https://www.google.com/maps/place/Fur%26Paws+pets+shop/@3.067057,101.693003,18z/data=!4m6!3m5!1s0x31cc4b01dfe57e73:0x7fa195a5da28c78a!8m2!3d3.0668539!4d101.6930566!16s%2Fg%2F11sftqw234?hl=en">HERE</a> for in-store pickup address.</p>
            <p><a href="Homepage.php">Back to Home Page</a></p>
        </div>
    </div>
</div>

<?php
    include("footer.php")
?>

</body>
</html>
