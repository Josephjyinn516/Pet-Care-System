<?php
session_start();
?>


<?php 
    if(isset($_SESSION['email'])){
    require_once("admin_header.php");
    }else{
        require_once('b4header.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="adminOrder.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,0,0" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
    <div class="adminOrderContent">
        <div class="titleSearch">
            <div class="titleAdminOrder">
                <h1>ORDER</h1>
            </div>
            <div class="search">
                <form class="search" action="" method="POST">
                    <input type="search" class="searchBox" name="searchText" placeholder="Search..">
                    <button type="submit" class="searchButton" name="searchButton"><lord-icon src="https://cdn.lordicon.com/rlizirgt.json" trigger="hover" axis-y="55"></lord-icon></button>
                </form>
            </div>
        </div>


        <?php 
        // $sql = "SELECT * FROM customer A INNER JOIN shoppingorder B ON A.cusEmail=B.emailAddress INNER JOIN product C ON B.productID=C.productID WHERE B.orderStatus=1 ORDER BY B.emailAddress ASC";
        // $result = mysqli_query($conn,$sql);
        ?>

        <table class="orderTable" align="center" cellspacing=0 width="100%">
            <tr class="tableHead">
                <th class="headerContent" width="40%" colspan="2">Product</th>
                <th class="headerContent" width="15%" align="left">Name</th>
                <th class="headerContent" width="15%" align="left">Contact No.</th>
                <th class="headerContent" width="15%" align="left">Email Address</th>
                <th class="headerContent" colspan="2">Action</th>
            </tr>
            <?php 
                if (isset($_POST['searchButton'])){
                    include ("conn.php");
                    $searchCusName = $_POST['searchText'];
                    $sql = "SELECT * FROM customer A INNER JOIN shoppingorder B ON A.cusEmail=B.emailAddress INNER JOIN product C ON B.productID=C.productID WHERE B.orderStatus=1 AND A.cusName LIKE '%$searchCusName%' ORDER BY B.emailAddress ASC";
                }else{
                    include ("conn.php");
                    $sql = "SELECT * FROM customer A INNER JOIN shoppingorder B ON A.cusEmail=B.emailAddress INNER JOIN product C ON B.productID=C.productID WHERE B.orderStatus=1 ORDER BY B.emailAddress ASC";
                }
                $result = mysqli_query($con,$sql);
                while ($orderRow = mysqli_fetch_array($result)) {
            ?>
                <tr class="orderRow">
                    <form method="post">
                        <td><img class="productImage" src="./Resources/<?= $orderRow['productImage']?>"></td>
                        <td><?=$orderRow['productName']?></td>
                        <td><?=$orderRow['cusName']?></td>
                        <td><?=$orderRow['cusHP']?></td>
                        <td><?=$orderRow['cusEmail']?></td>
                        <input type="hidden" name="cusEmail" value="<?= $orderRow['cusEmail']?>">
                        <td align="center"><a href="confirmPickup.php?id=<?=$orderRow['cartID']?>" title="Mark as completed pickup" onclick="return confirm('Confirm Pickup is Completed?')"><lord-icon
                            src="https://cdn.lordicon.com/egiwmiit.json"
                            trigger="hover"
                            colors="primary:#4d2a00"
                            style="width:40px;height:40px">
                        </lord-icon></td>
                        <td align="center"><a href="cancelOrder.php?id=<?=$orderRow['cartID']?>" title="Cancel order" onclick="return confirm('Confirm Cancel Order?')"><lord-icon
                            src="https://cdn.lordicon.com/nhfyhmlt.json"
                            trigger="hover"
                            colors="primary:#4d2a00"
                            state="hover-1"
                            style="width:40px;height:40px">
                        </a></lord-icon></td>
                    </form>
                </tr>
            <?php }?>
        </table>
    </div>
    <?php
        require_once("footer.php");
    ?>

</body>
</html>