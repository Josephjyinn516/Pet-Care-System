<!DOCTYPE html>
<?php

session_start();
?>

<html lang="en">
    <head>
        <link rel="stylesheet" href="adminLogin.css">
        <title>Login to CaringOnes</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
        <div class = "admin">
            <a href="http://localhost/FYP/login.php">
                <i class='bx bx-user-pin bx-tada-hover bx-lg' title="User Login">
                </i>
            </a> 
        </div>
        <div class = "doctor">
            <a href="http://localhost/FYP/doctorLogin.php">
                <i class='bx bxs-user-badge bx-tada-hover bx-lg' title="Doctor Login">
                </i>
            </a>
        </div>

        <video autoplay muted loop id="video-background">
            <source src="./Resources/adminVideo.mp4" type="video/mp4">
        </video>
        <section>


        </div>
            <div class="form-box">
                <div class="form-value">
                    <form method="post", action="">
                    <div class="logo">
                            <img src="./Resources/Caringones_logo_transparent.png" width="200" height="200">
                        </div>
                        <h2>
                            Login
                        </h2>

                        <br><br><br><br>

                        <div class="inputbox">
                            <i class='bx bx-envelope bx-tada-hover' ></i>
                            <input type="email" required name="adminEmail">
                            <label for="">Email</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bx-lock-alt bx-tada-hover' ></i>
                            <input type="password" required name="adminPassword">
                            <label for="">Password</label>
                        </div>

                        <!-- <div class="forget">
                            <label for="">
                                <input type="checkbox">
                                Remember me <a href="">Forget Password</a>
                            </label>
                            
                        </div> -->

                        <button id="login" name="login">Log in</button>

                        <!-- <div class="register">
                            <p>
                                Help Doctor create account? <a href="http://localhost/FYP/Sign%20up%20page/doctorSignUp.html">Register
                            </p>
                        </div> -->
                    </form>
                </div>
            </div>
        </section>
        <?php
        if(isset($_POST["login"])){

            include("conn.php");

            $adminEmail = $_POST['adminEmail'];
            $adminPassword = $_POST['adminPassword'];
            $sql_que = "SELECT * FROM admin WHERE adminEmail ='$adminEmail' AND adminPassword ='$adminPassword'";
            $result = mysqli_query($con, $sql_que);

            if ($result->num_rows > 0) {
                $_SESSION['email']= $adminEmail; 
                $_SESSION['password']= $cusPassword;
                echo '<script>alert("Success!");window.location.href="admin_appointment.php";</script>';	 
            } else {
                echo '<script>alert("Invalid Account or Wrong Password! Please Try Again");window.location.href="adminLogin.php";</script>';
            }
            }
?>

        
    </body>