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
            Monthly Report
        </title>
        <link rel="stylesheet" href="printReport.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
        <div class="banner">
            <div class="logo">
                    <img src="./Resources/Caringones_logo_transparent.png">
            </div>

            <h1>
                Monthly Report
            </h1>
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

            <button onclick="window.print()" class="btn btn-primary">
                PRINT
            </button>
        </div>

    