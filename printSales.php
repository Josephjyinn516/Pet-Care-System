<?php
session_start();
?>


<?php 
    if(isset($_SESSION['email']))
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8>
        <meta name="viewport" content="width=device-width", initial-scale=1>
        <title>
            Monthly Sales
        </title>
        <link rel="stylesheet" href="printSales.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
    <div class="banner2">
            <div class="logo">
                    <img src="./Resources/Caringones_logo_transparent.png">
            </div>

            <h1>
                Monthly Sales
            </h1>

            <table class="table">
                <thread>
                    <tr>
                        <th>
                            No.
                        </th>

                        <th>
                            Product Image
                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Product Price (RM)
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Contact No.
                        </th>
                        <th>
                            Email
                        </th>
                    </tr>
                </thread>
                <tbody>
                
                <?php 
                include("conn.php");

                $n = 1;
                $sql = "SELECT * FROM customer A INNER JOIN shoppingorder B ON A.cusEmail=B.emailAddress INNER JOIN product C ON B.productID=C.productID WHERE B.orderStatus=2 ORDER BY B.emailAddress ASC;";
                $result = mysqli_query($con,$sql);
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<form method="post">';
                    $s = $row['orderStatus'];
                    if ($s == 2){
                    
                    echo '<tr class="orderRow">';
                    echo '<td>'.$n.'</td>';
                    echo '<td><img class="productImage" src="./Resources/'.$row['productImage'].'"></td>';
                    echo '<td>'.$row['productName'].'</td>';
                    echo '<td>'.$row['productPrice'].'</td>';
                    echo '<td>'.$row['cusName'].'</td>';
                    echo '<td>'.$row['cusHP'].'</td>';
                    echo '<td>'.$row['cusEmail'].'</td>';
                    echo '<input type="hidden" name="cusEmail" value="'.$row['cusEmail'].'">';
                    
                    $n++;
                    }
                }
                mysqli_close($con);
                ?>
            </table>

            <button onclick="window.print()" class="btn btn-primary">
                PRINT
            </button>
        </div>

    