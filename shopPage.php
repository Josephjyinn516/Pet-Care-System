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
    <title>
        Caringones Shop
    </title>
    <link rel="stylesheet" href="shopPage.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,0,0" />
</head>

<body>
<div class="content">
    <div>
        <h1 class="pageTitle">Shop</h1>
    </div>
    <div class="search">
        <form class="search" action="" method="POST">
            <input type="search" class="searchBox" name="searchText" placeholder="Search..">
            <button type="submit" class="searchButton" name="searchButton"><lord-icon src="https://cdn.lordicon.com/rlizirgt.json" trigger="hover" axis-y="55"></lord-icon></button>
            <!-- <button type="submit" name="search_button">Go</button> -->
        </form>
    </div>

    <div id="filterContainer">
        <?php
            $query1 = "SELECT `categoryName` FROM `category`";
            $result1 = mysqli_query($con, $query1);
        ?>

        <button class= "filterChoice active" onclick= "filterSelection('All')">All</button>
        <?php
            while ($row = mysqli_fetch_array($result1)) {?>
                <button class = "filterChoice" onclick= "filterSelection('<?=$row['categoryName']?>')"><?=$row['categoryName']?></button>

        <?php
            }
        ?>
    </div>
    
    <div class="productContainer clearfix">
        <?php 
        if (isset($_POST['searchButton'])){
            $searchProduct = $_POST['searchText'];
            $query2 = "SELECT * FROM `product` WHERE `productName` LIKE '%$searchProduct%'";
            
            $result2 = mysqli_query($con, $query2);
            $result2Count = mysqli_num_rows($result2);

            if ($result2Count == 0) {?>
                <p>No result found, please try again.</p>
        <?php } else {
            $result2 = mysqli_query($con, $query2);
            while ($row = mysqli_fetch_array($result2)){?>
                <form method="post">
                    <div class="productCard <?=$row['categoryName']?>" data-name="<?=$row['productID']?>">
                        <img src="./Resources/<?= $row['productImage']?>">
                        <div class="productInfo">
                            <div class="productName"><h3><?=$row['productName']?></h3></div>   
                            <div><h3>RM <?=$row['productPrice']?></h3></div>
                            <div class="addToCartSection">
                                <button class="theButton" name="addButton" type="submit"">
                                    <h3>ADD TO CART</h3>
                                </button>
                            </div>
                            <!-- <div class="material-symbols-rounded">add_shopping_cart</div> -->
                        </div>
                        <div class="infoForCart">
                            <input type="hidden" name="productID" value="<?= $row['productID']?>">
                            <input type="hidden" name="productImage" value="<?= $row['productImage']?>">
                            <input type="hidden" name="productName" value="<?= $row['productName']?>">
                            <input type="hidden" name="productPrice" value="<?=$row['productPrice']?>">
                        </div>
                    </div>
                </form>

        <?php } } } else {

            $query2 = "SELECT * FROM `product`";
            $result2 = mysqli_query($con, $query2);

            while ($row = mysqli_fetch_array($result2)){
        ?>
                <form method="post">
                    <div class="productCard <?=$row['categoryName']?>" data-name="<?=$row['productID']?>">
                        <img src="./Resources/<?= $row['productImage']?>">
                        <div class="productInfo">
                            <div class="productName"><h3><?=$row['productName']?></h3></div>   
                            <div><h3>RM <?=$row['productPrice']?></h3></div>
                            <div class="addToCartSection">
                                <button class="theButton" name="addButton" type="submit"">
                                    <h3>ADD TO CART</h3>
                                </button>
                            </div>
                            <!-- <div class="material-symbols-rounded">add_shopping_cart</div> -->
                        </div>
                        <div class="infoForCart">
                            <input type="hidden" name="productID" value="<?= $row['productID']?>">
                            <input type="hidden" name="productImage" value="<?= $row['productImage']?>">
                            <input type="hidden" name="productName" value="<?= $row['productName']?>">
                            <input type="hidden" name="productPrice" value="<?=$row['productPrice']?>">
                        </div>
                    </div>
                </form>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php
if(isset($_POST['addButton'])){
    if(isset($_SESSION['email'])){

        $cusEmail = $_SESSION['email'];
        // $cusEmail = "abc8017@mail.com";

        $pID = $_POST['productID'];
        // $pImage = $_POST['productImage'];
        // $pName = $_POST['productName'];
        // $pPrice = $_POST['productPrice'];
        // echo "<p>$pID</p>";
        $sqlRead = "SELECT * FROM `product` WHERE `productID`=$pID";
        $sqlSearch = "SELECT * FROM shoppingorder WHERE productID=$pID AND emailAddress=`$cusEmail` AND orderStatus=0";
        $resultRead = mysqli_query($con, $sqlRead);
        $resultSearch = mysqli_query($con,$sqlSearch);
        // if(mysqli_num_rows($resultSearch) == 0 ) {
            $row = mysqli_fetch_array($resultRead);
            $sqlWrite = "INSERT INTO `shoppingorder`
                (productID,emailAddress,orderStatus) 
                VALUES ('$pID','$cusEmail',0)";
            $writeCompleted = mysqli_query($con,$sqlWrite);
            echo"<script>";
            echo"alert('New Product Added to Cart!');";
            echo"</script>";
        // }else{
        //     $searchRow = mysqli_fetch_array($resultSearch);
        //     $newCount = $searchRow['quantity'] + 1;
        //     $sqlUpdate = "UPDATE `shoppingorder` 
        //         SET `quantity` = $newCount";
        //     $updateCompleted = mysqli_query($conn,$sqlUpdate);
        //     echo"<script>";
        //     echo"alert('New Count Updated to Cart!');";
        //     echo"</script>";
        // }
    }else{
        echo "<script>";
        echo"alert('Please Login!');";
        echo"window.location.replace('login.php');";
        echo "</script>";    
    }
}
?>


<script>
    filterSelection("All")
    function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("productCard");
    if (c == "All") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
    }
    }

    // Show filtered elements
    function addClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
        }
    }
    }

    // Hide elements that are not selected
    function removeClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
    }

    // Add active class to the current control button (highlight it)
    var btnContainer = document.getElementById("filterContainer");
    var btns = btnContainer.getElementsByClassName("filterChoice");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
</script>

<?php
    include("footer.php")
?>

</body>

</html>