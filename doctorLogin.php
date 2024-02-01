<!DOCTYPE html>
<?php
include("conn.php");
session_start();


    // $sql = "SELECT * FROM customer WHERE cusEmail = '" . $_POST["cusEmail"] . "' AND Password = '" . $_POST["cusPassword"] . "'";

    // $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_array($result);
    // if($row) {
    //     $_SESSION["userID"] = $row["cusEmail"];

    //     #check is patient or not#
    //     if($_SESSION["userID"] == ["cusEmail"]){
    //         echo "<script>window.location.href='http://localhost/FYP/User%20Homepage/Homepage.php';</script>";
    //     }
            
    // } else {
    //     $message = "Wrong Email or Password, Please Try Again";
    // }
    // Check if email and password are empty
    // if(empty($_POST["email"]) || empty($_POST["password"])) {
    //     echo "Email or Password is empty!";
    //     exit();
    // } else {
    //     // Hash the password before comparing with the database
    //     $hashed_password = md5($_POST["password"]);

    //     // Check if the email and password are correct
    //     $sql = "SELECT * FROM customer WHERE cusEmail='$_POST[email]' AND password='$hashed_password'";
    //     $result = mysqli_query($con, $sql);

    //     if(mysqli_num_rows($result) === 1) {
    //         // Login successful
    //         $row = mysqli_fetch_assoc($result);

    //         // Create session variables
    //         $_SESSION['name'] = $row['cusName'];
    //         $_SESSION['email'] = $row['cusEmail'];

    //         header("Location: http://localhost/FYP/User%20Homepage/Homepage.php");
    //         exit();
    //     } else {
    //         // Login failed
    //         echo "Incorrect email or password!";
    //     }
    // }



?>

<html lang="en">
    <head>
        <link rel="stylesheet" href="doctorLogin.css">
        <title>Login to CaringOnes</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
        <div class = "user">
            <a href="http://localhost/FYP/login.php">
                <i class='bx bx-user-pin bx-tada-hover bx-lg' title="User Login">
                </i>
            </a> 
        </div>

        <div class = "admin">
            <a href="http://localhost/FYP/adminLogin.php">
                <i class='bx bx-user-circle bx-tada-hover bx-lg' title="Admin Login">
                </i>
            </a> 
        </div>

        <video autoplay muted loop id="video-background">
            <source src="./Resources/doctorVideo.mp4" type="video/mp4">
        </video>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form method="post", action="">
                    <div class="logo">
                            <img src="./Resources/Caringones_logo_transparent.png" width="150" height="150">
                        </div>
                        <h2>
                            Login
                        </h2>

                        <br><br><br><br><br>

                        <div class="inputbox">
                            <i class='bx bx-envelope bx-tada-hover' ></i>
                            <input type="email" required name="docEmail">
                            <label for="">Email</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bx-lock-alt bx-tada-hover' ></i>
                            <input type="password" required name="docPassword">
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
                                Don't have an account? <a href="http://localhost/FYP/Sign%20up%20page/index%20(1).html">Register
                            </p>
                        </div> -->
                    </form>
                </div>
            </div>
        </section>

        <?php
        if(isset($_POST["login"])){

            include("conn.php");

            $docEmail = $_POST['docEmail'];
            $docPassword = $_POST['docPassword'];
            $sql_que = "SELECT * FROM doctor WHERE docEmail ='$docEmail' AND docPassword ='$docPassword'";
            $result = mysqli_query($con, $sql_que);

            if ($result->num_rows > 0) {
                $_SESSION['email']= $docEmail; 
                echo '<script>alert("Success!");window.location.href="http://localhost/FYP/popup.php";</script>';	 
            } else {
                echo '<script>alert("Invalid Account! Please Try Again");window.location.href="doctorLogin.php";</script>';
            }
            }
?>
        
    </body>