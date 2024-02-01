<!DOCTYPE html>
<html>
    <?php
        require_once("admin_header.php");
    ?>
    <head>
        <link href="adminCategory.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
<body>
    <?php
        include ("conn.php");
        $sql = "SELECT * FROM category";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="colour1">
        <div class="titleappointmenttext">
            <h1>Product Categories</h1>
        </div>

        <div style="display: flex;">
            <table class="table" cellspacing=0>
                <tr align="center">
                    <!-- <th>ID</th> -->
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            <?php
                while ($row=mysqli_fetch_array($result))
                { 
                    print '<tr align=center>';
                    print '<form method="post">';
                    print '<td>'.$row['categoryName'].'</td>';
                    print '<td>'.'
                            <a onclick="return confirm(\'Delete '.$row['categoryName'].' record?\');" href="deleteCategory.php?id='.$row["categoryID"].'">
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

            </table>

            <div class="inputcontainer">
                <form method="post" action="addCategory.php">
                <input align="center" class="inputfield" type="text" name="categorynm" id="categorynm" placeholder="New Category">
                <button type="submit" name="submitBtn" title="Add Category">Add Category</button>
                </form>
            </div>
        </div>
    </div>

</body>
    <?php
        require_once("footer.php");
    ?>
</html>