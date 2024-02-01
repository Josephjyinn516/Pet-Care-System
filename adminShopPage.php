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
        <link href="adminShopPage.css" rel="stylesheet">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,0,0" />
    </head>
    <body>
    <?php
        include ("conn.php");
        $sql = "SELECT * FROM category";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="colour1 clearfix">
        <div class="titleSearch">
            <div class="titleappointmenttext">
                <h1>SHOP PAGE</h1>
            </div>
            <div class="search">
                <form class="search" action="" method="POST">
                    <input type="search" class="searchBox" name="searchText" placeholder="Search product name..">
                    <button type="submit" class="searchButton" name="searchButton"><lord-icon src="https://cdn.lordicon.com/rlizirgt.json" trigger="hover" axis-y="55"></lord-icon></button>
                </form>
            </div>
        </div>

        <div class="tableContainer">
            <table class="table" id="leftTable" cellspacing=0 width="100%">
                <tr align="center">
                    <!-- <th>ID</th> -->
                    <th class="leftHeader" align="left">Category</th>
                    <th class="rightHeader">Action</th>
                </tr>
            <?php
                while ($row=mysqli_fetch_array($result))
                { 
                    print '<tr class="categoryRow" align=center>';
                    print '<form method="post">';
                    print '<td align="left">'.$row['categoryName'].'</td>';
                    print '<td>'.'
                            <a title="Delete Category" onclick="return confirm(\'Delete '.$row['categoryName'].' record?\');" href="deleteCategory.php?id='.$row["categoryID"].'">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/kfzfxczd.json"
                                trigger="hover"
                                colors="primary:#121331"
                                style="width:30px;height:30px">
                            </lord-icon>
                            </a>'
                            .'</td>';
                    print '</form>';
                    print '</tr>';
                }
                mysqli_close($con);
                ?>
            <div class="inputcontainer">
                <form method="post" action="addCategory.php">
                <td class="fieldContainer" align="center"><input class="inputfield" type="text" name="categorynm" id="categorynm" placeholder="Add category here.." required="required"></td>
                <td class="addField" align="center"><button class="addButton" type="submit" name="submitBtn" title="Add Category"><span class="material-symbols-rounded">add_circle</span></button></td>
                </form>
            </div>

            </table>





            <table class="table" id="rightTable" cellspacing=0 width="100%">
                <tr align="center">
                    <!-- <th>ID</th> -->
                    <th class="leftHeader" align="left">Name</th>
                    <th align="left" width="10%">Image</th>
                    <th align="left">Price</th>
                    <th align="left">Category</th>
                    <th class="rightHeader" colspan=2>Action</th>
                </tr>
            <?php
                if (isset($_POST['searchButton'])){
                    include ("conn.php");
                    $searchProduct = $_POST['searchText'];
                    $sql2 = "SELECT * FROM product WHERE `productName` LIKE '%$searchProduct%'";
                }else{
                    include ("conn.php");
                    $sql2 = "SELECT * FROM product";
                }
                $result2 = mysqli_query($con, $sql2);
                if(mysqli_num_rows($result2) == 0 ) {?>
                    <tr class="productRow" align=center>
                        <td class="noMatchResult" colspan=6>No match product found.</td>
                    </tr>

                <?php
                }else{    
                    while ($row1=mysqli_fetch_array($result2))
                    { 
                        print '<tr class="productRow" align=center>';
                        print '<form method="post">';
                        print '<td align="left">'.$row1['productName'].'</td>';
                        // print '<td align="left">'.$row1['productImage'].'</td>';
                        print '<td align="left"><img class="productImage" src="./Resources/'.$row1['productImage'].'"></td>';

                        print '<td align="left">'.$row1['productPrice'].'</td>';
                        print '<td align="left">'.$row1['categoryName'].'</td>';
                        print '<td><button class="editButton" name="editButton" title="Edit Product"><span class="material-symbols-rounded">edit</span></button></td>';
                        print '<td>'.'<a title="Delete Product" onclick="return confirm(\'Delete '.$row1['productName'].' from product?\');" href="deleteProduct.php?id='.$row1["productID"].'"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/kfzfxczd.json"
                                    trigger="hover"
                                    colors="primary:#121331"
                                    style="width:30px;height:30px">
                                </lord-icon>
                                </a>'
                                .'</td>';?>
                        <input type="hidden" name="productID" value="<?= $row1['productID']?>">
                        <input type="hidden" name="productName" value="<?= $row1['productName']?>">
                        <input type="hidden" name="productImage" value="<?= $row1['productImage']?>">
                        <input type="hidden" name="productPrice" value="<?=$row1['productPrice']?>">

                    <?php
                        print '</form>';
                        print '</tr>';
                    }
                }
                // mysqli_close($conn);

                //change the last row of table to editor pane.
                if(isset($_POST['editButton'])){
                    $pID = $_POST['productID'];
                    $searchEdit = mysqli_query($con,"SELECT * FROM product WHERE productID =$pID");
                    while($editRow = mysqli_fetch_array($searchEdit)){
                ?>
                <div class="inputcontainer">
                    <form method="post" action="editProduct.php">
                        <input type="hidden" name="productID" value="<?= $editRow['productID']?>">
                        <td class="fieldContainer" align="left"><input class="inputfield" type="text" name="productName" id="categorynm" value="<?php echo $editRow['productName']?>" placeholder="Add product here.." required="required"></td>
                        <td class="imageField"><input name="productImage" class="filePicker" type="file" align="left" required="required"></td>
                        <td class="priceField"><input name="productPrice" class="price" type="number" min="0" value="<?php echo $editRow['productPrice']?>" placeholder="Product price.." required="required"></td>
                        <td class="categoryField"><select name="productCategory" class="category">
                            <?php 
                            $sql = mysqli_query($con, "SELECT * FROM category");
                            while ($row1 = $sql->fetch_assoc()){?>
                                <option value="<?php echo $row1['categoryName']?>" <?php if($editRow['categoryName'] == $row1['categoryName']){?>
                                    selected<?php }?>
                                ><?php echo $row1['categoryName']?></option>
                            <?php
                            }
                            ?>
                        </select></td>
                        <td class="addField" align="center" colspan=2><button class="saveEditButton" type="submit" title="Save Changes" onclick="return confirm('Confirm Edit Product?')"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/egiwmiit.json"
                            trigger="hover"
                            colors="primary:#ffffff"
                            state="hover"
                            style="width:30px;height:30px">
                        </lord-icon>
                        </button></td>
                    </form>
                </div>


                <?php
                }
                }else{
                //display add new product pane at last row by default.
                ?>
            <div class="inputcontainer">
                <form method="post" action="addProduct.php">
                    <td class="fieldContainer" align="left"><input class="inputfield" type="text" name="productName" id="categorynm" placeholder="Add product here.." required="required"></td>
                    <td class="imageField"><input name="productImage" class="filePicker" type="file" align="left" required="required"></td>
                    <td class="priceField"><input name="productPrice" class="price" type="number" min="0" placeholder="Product price.." required="required"></td>
                    <td class="categoryField"><select name="productCategory" class="category">
                        <?php 
                        $sql = mysqli_query($con, "SELECT * FROM category");
                        while ($row1 = $sql->fetch_assoc()){
                            echo "<option value=".$row1['categoryName'].">" . $row1['categoryName'] . "</option>";
                        }
                        ?>
                    </select></td>
                    <td class="resetField"><button class="resetButton" type="reset" title="Clear entries"><span class="material-symbols-rounded">clear_all</span></button></td>
                    <td class="addField" align="center"><button class="addButton" type="submit" name="submitBtn" title="Add Product"><span class="material-symbols-rounded">add_circle</span></button></td>
                </form>
            </div>
            <?php }?>

            </table>


        </div>
    </div>

</body>
    <?php
        require_once("footer.php");
    ?>
</html>