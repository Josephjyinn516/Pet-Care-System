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
    $sqlCart = "SELECT A.productID, A.cartID, B.productID, B.productImage, B.productName, B.productPrice FROM shoppingorder AS A INNER JOIN product AS B ON A.productID=B.productID WHERE A.emailAddress='$cusEmail' AND A.orderStatus=0;";
    $cartResult = mysqli_query($con,$sqlCart);
    ?>
    <div class="cartPage">
        <h1 class="pageTitle">YOUR CART</h1>
        <?php if(mysqli_num_rows($cartResult) == 0 ) { ?>
            <div>
                <h2>NO PRODUCTS YET.</h2>
                <h2>CLICK <a href="shopPage.php">HERE</a> TO BROWSE ITEMS ON SALE.<h2>
            </div>
        <?php }else{?>
            <div class="cartTable">
                <table class="tableContainer" width="100%" align="center" cellpadding="10">
                    <thead>
                        <tr class="tableHead">
                            <th class="tableHeader" colspan="2">PRODUCTS</th>
                            <!-- <th class="tableheader" width="50px" align="right">Quantity</th> -->
                            <!-- <th class="tableheader" align="right">Unit Price</th> -->
                            <th class="tableHeader" align="left" width="25%" colspan="2">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalPrice = 0;
                        while($row = mysqli_fetch_array($cartResult)){ 
                        ?>
                            <form method="post">
                                <tr class="cartRow">
                                    <td><img class="productImage" src="./Resources/<?= $row['productImage']?>"></td>
                                    <td><?=$row['productName']?></td>
                                    <td align="right">RM <?=$row['productPrice']?></td>
                                    <td><a href="deleteFromCart.php?id=<?=$row['cartID']?>" onclick="return confirm('Confirm remove <?=$row['productName']?> from cart?')"><lord-icon class="deleteButton" src="https://cdn.lordicon.com/kfzfxczd.json" trigger="hover" colors="primary:#121331" state="hover-empty" style="width:250px;height:250px"></lord-icon></a></td>
                                    <?php $totalPrice = $totalPrice + $row['productPrice'];?>
                                </tr>
                            </form>
                        <?php
                        }
                    ?>
                    </tbody>

                </table>
                <div class="belowTable">
                    <div class="showTotalPrice">TOTAL PRICE: RM <?=$totalPrice?></div>
                    <form action="placeOrder.php" method="post">
                        <button type="submit" name="orderButton" class="orderButton" onclick="return confirm('Confirm Place Order?')">PLACE ORDER</button>
                        <input type="hidden" name="cusEmail" value='<?=$cusEmail?>'>
                    </form>
                </div>
            </div>
        <?php }?>
    </div>


<?php
    include("footer.php")
?>

</body>
</html>