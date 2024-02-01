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
        <meta charset="utf-8>
        <meta name="viewport" content="width=device-width", initial-scale=1>
        <title>
            Welcome to Caring Ones' Doctor!
        </title>
        <link rel="stylesheet" href="report.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
        <div class="banner">
            <h1>
                Report
            </h1>

            <h2>
                Monthly Appointment
            </h2>

            <table class="table">
                <thread>
                    <tr>
                        <th>
                            No.
                        </th>

                        <th>
                            Date
                        </th>
                        <th>
                            Owner'Name
                        </th>
                        <th>
                            Tel
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Pet's Name
                        </th>
                        <th>
                            Gender
                        </th>
                        <th>
                            Breed
                        </th>

                        <th>
                            Types of services
                        </th>
                    </tr>
                </thread>
                <tbody>
                <?php

                    include("conn.php");

                    $n=1;
                    $sql ="SELECT * FROM appointment";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo '<form method="post">';
                        $s = $row['status'];
                        if ($s == 2){
                            echo "<tr>";
                            echo'<td>'.$n.'</td>';
                            echo '<td>'.$row['appointmentDate'].'</td>';
                            echo '<td>'.$row['cusName'].'</td>';
                            print '<td>'.$row['cusHP'].'</td>';
                            print '<td> <a href="mailto:'.$row['cusEmail'].'">'.$row['cusEmail'].'</a></td>';
                            echo '<td>'.$row['petName'].'</td>';
                            echo '<td>'.$row['petGender'].'</td>';
                            echo '<td>'.$row['petBreed'].'</td>';
                            print '<td>'.$row['serviceType'].'</td>';
                            echo "</tr>";

                            $n++;
                        }
                    }
                    mysqli_close($con);
                    ?>
                </tbody>           
            </table>

            
            <button class="btn btn-primary" >
                <a href="http://localhost/FYP/printReport.php" target="_blank">PREVIEW</a>
            </button>
            

        </div>

        <div class="banner2">
            <h1>
                Sales Report
            </h1>

            <h2>
                Monthly Sales
            </h2>

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

            
            <button class="btn btn-primary" >
                <a href="printSales.php" target="_blank">PREVIEW</a>
            </button>
            

        </div>

        
        <?php
            include("footer.php");
        ?>