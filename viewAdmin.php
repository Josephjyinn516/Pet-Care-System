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
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <meta charset="utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Admin Setting
        </title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link rel="icon" href="./Resources/Caringones_logo_transparent.png" type="image/png" sizes="16x16">

    <link href="viewAdmin.css" rel="stylesheet">
</head>

<!--Header of the page-->

<body>
    <div class="banner">
        <div class="logout">
                <box-icon name='log-out' animation='tada-hover' size='lg' title="Log out" onclick="openPopup()"></box-icon>
            </div>

            <div class="accept-decline" id="popup">
                <p>Are you sure to <br>log out your account?
                </p>
                
                <a href="adminLogin.php">
                    <button type="yes" class="btn-yes">
                        Yes
                    </button>
                </a>
                

                <button type="no" class="btn-no" onclick="closePopup()">
                    No
                </button>
            </div>

        <form action="editAdmin.php" method="post">

            <?php
            include("conn.php");
            $cusEmail = $_SESSION["email"];
            $sql = "SELECT * FROM admin WHERE adminEmail = '$cusEmail'";
            $result = mysqli_query($con, $sql);
            ?>
            

            <div class="popup-box">

            </div>
            
            <div class="userProfile">
                <div class="ellipse">
                    <?php
                        while ($row = mysqli_fetch_array($result)) {

                    ?>

                    <h2>
                        CaringOnes Admin
                    </h2>

                </div>
            </div>

            <!-- <div class="notification">
                <div class="ellipse">
                    <lord-icon
                        src="https://cdn.lordicon.com/psnhyobz.json"
                        trigger="hover"
                        style="width:55px;height:55px;left:13px;top:13px;cursor:pointer;">
                    </lord-icon>

                    <p>
                        Notification
                    </p>
                </div>
            </div> -->
            
            <a href = "http://localhost/FYP/SignUpDoctor.php">
                <div class="edit-info">
                    <div class="ellipse">
                    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/bhfjfgqz.json"
                                trigger="hover"
                                colors="primary:#000000"
                                style="width:60px;height:60px;position:absolute;
                                right: 9px;top: 13px;">
                            </lord-icon>
                    </div>

                    <p>
                        Add Doctor
                    </p>
                </div>
            </a>


            <div id="Doctor Setting">
                <div class="background">
                    <div class="basic-info-rect">
                        <p1>
                            <b>
                                Admin Info
                            </b>
                        </p1>

                        <div class="email">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/diihvcfp.json"
                                    trigger="hover"
                                    style="width:40px;height:40px;left:15px;top:75px;">
                                </lord-icon>

                                

                                <?php
                                echo '<p>' . $row['adminEmail'] . '</p>';
                                ?>


                        </div>

                        <div class="password">
                            <box-icon type='solid' name='lock-alt' animation='tada-hover' size='md'></box-icon>


                            <?php
                            echo '<p2>' . $row['adminPassword'] . '</p2>';
                            ?>
                        </div>


                        <!-- <div class="age">
                            <box-icon name='child' animation='tada-hover' size='lg'></box-icon>

                        </div>

                        <div class="gender">
                            <box-icon name='male-sign' animation='tada-hover' size='md'></box-icon>

                        </div>

                        <div class="hp">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/ssvybplt.json"
                                    trigger="hover"
                                    colors="primary:#121331"
                                    style="width:40px;height:40px;left:15px;top:275px;">
                                </lord-icon>
                                
                        </div>
                    </div>

                    <div class="pet-info-rect">
                        <p1>
                            <b>
                                Pet Profile
                            </b>
                        </p1>

                        <div class="name">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/pmegrqxm.json"
                                    trigger="hover"
                                    colors="primary:#121331"
                                    style="width:40px;height:40px;left:15px;top:75px;">
                                </lord-icon>
                                <?php
                            echo '<p>' . $row['petName'] . '</p>';
                            ?>
                        </div>

                        <div class="species">
                            <box-icon name='dog' type='solid' animation='tada-hover' size='md'></box-icon>
                            <?php
                            echo '<p2>' . $row['petSpecies'] . '</p2>';
                            ?>
                        </div>

                        <div class="breed">
                            <box-icon name='category' animation='tada-hover' size='md'></box-icon>
                            <?php
                            echo '<p>' . $row['petBreed'] . '</p>';
                            ?>
                        </div>

                        <div class="petGender">
                        <box-icon name='male-sign' animation='tada-hover' size='md'></box-icon>
                        <?php
                            echo '<p>' . $row['petGender'] . '</p>';
                            ?>
                        </div>

                        <div class="color">
                            <box-icon name='color' animation='tada-hover' size='md'></box-icon>
                            <?php
                            echo '<p>' . $row['petColour'] . '</p>';
                            ?>
                        </div>
                    </div> -->

                    <!-- <div class="doctor-info-rect">
                        <p1>
                            <b>
                                Doctor Info
                            </b>
                        </p1>
                    </div> -->

                    
                </div>
            </div>
            <?php
                }
                ?>

            <script>
                let popup = document.getElementById("popup");

                function openPopup() {
                    popup.classList.add("open-popup");
                }

                function closePopup() {
                    popup.classList.remove("open-popup");
                }
            </script>
        </form>

    </div>
</body>