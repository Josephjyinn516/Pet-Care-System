<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="style.css">
        <script src="creSignup.js"></script>
        <title>
            SignUp
        </title>
    </head>
    
    
    <body>
        <video autoplay muted loop id="video-background">
            <source src="./Resources/videoPet.mp4" type="video/mp4">
        </video>
        <section>
            <!-- <div class="card">
                <div class="logo">
                    <img src="./Resources/Caringones_logo_transparent.png">
                </div>
    
                <h2>
                    Create Account
                </h2>
    
                <form class="form" method="post" action="cusInsert.php" onsubmit="return validation()">
                    <input type="email" name="email" required="required" placeholder="Email">

                    <input type="text" name="name" required="required" placeholder="Name">
                    
                    <input type="password" name="password" required="required" placeholder="Password">
                    <button type="submit" name="signup" id="signup">
                        SIGN UP 
                    </button>
                </form>
                <footer>
                    Existing users, sign in
                    <a href="http://localhost/FYP/Login%20page/login.php#">
                        Here
                    </a>
                </footer>
            </div> -->

            <div class="form-box">
                <div class="form-value">
                    <form method="post", action="">
                        <div class="logo">
                            <img src="./Resources/Caringones_logo_transparent.png" width="150" height="150">
                        </div>


                        <h2>
                            Sign Up
                        </h2>
                        <br><br><br><br><br><br>

                        <div class="inputbox">
                            <i class='bx bx-envelope bx-tada-hover' ></i>
                            <input type="email" required name="email">
                            <label for="">Email</label>
                        </div>

                        <div class="inputbox">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/bhfjfgqz.json"
                                trigger="hover"
                                colors="primary:#ffffff"
                                style="width:25px;height:25px;position:absolute;
                                right: 5px;top: 48px;">
                            </lord-icon>
                            <input type="name" required="required" name="name">
                            <label for="">Name</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bx-lock-alt bx-tada-hover' ></i>
                            <input type="password" required name="password" minlength="10">
                            <label for="">Password</label>
                        </div>

                        <!-- <div class="forget">
                            <label for="">
                                <input type="checkbox">
                                Remember me <a href="">Forget Password</a>
                            </label>
                            
                        </div> -->
                        <button id="login" name="signup">
                            SIGN UP 
                        </button>

    

                        <div class="register">
                            <p>
                                Existing users, sign in <a href="http://localhost/FYP/login.php">Here
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php

    include("conn.php");

    #check whether the email registered or not#
    if(isset($_POST["signup"])){
    $sql = "SELECT * FROM customer WHERE cusEmail = '" . $_POST["email"] . "'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
    #if it registered#
    if($row) {
        echo "<script>alert('This account is already existed');
        window.location.href='http://localhost/FYP/login.php';
        </script>";
        return false;
    #if not registered#
    }else{
        $sql1 = "INSERT INTO customer (cusEmail, cusName, cusPassword)
        
        VALUES

        ('$_POST[email]','$_POST[name]', '$_POST[password]')";

        $fire1 = mysqli_query($con, $sql1) or die('Error: ' . mysqli_error($con));
            if($fire1){
                echo '<script>alert("Sign Up Successful! Returning to login page");
                window.location.href= "http://localhost/FYP/login.php";
                </script>';
            }

        mysqli_close($con);
    }

    }

?>
        

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'poppins', sans-serif;
}

#video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}
  
  .content {
    position: relative;
    z-index: 1;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
}

.form-box{
    position: relative;
    width:400px;
    height: 650px;
    background: transparent;
    border:2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(10px)brightness(0.8);
    display: flex;
    justify-content: center;
    align-items: center;
}

h2 {
    font-size: 2em;
    color: #fff;
    position: absolute;
    top: 125px;
    left: 150px;
}

.inputbox {
    position: relative;
    margin: 30px 0px;
    width: 310px;
    border-bottom: 2px solid #fff;
}

.inputbox label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-10%);
    color: #fff;
    font-size: 1.5em;
    pointer-events: none; 
    transition: .5s;
}


input:focus ~ label,
input:valid ~ label {
top: -5px;
}
.inputbox input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 35px 0 5px;
    color: #fff;
}

.inputbox i {
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 50px;
}

.forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
}

.forget label input {
    margin-right: 3px;
}

.forget label a {
    color: #5c75ff;
    text-decoration: none;
}

.forget label a:hover{
    text-decoration: underline;
}

button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    transition: all 0.375s;
}

.form-value button:hover {
    color: #fff;
    background: #ff7300;
}

.register {
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}

.register p a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}

.register p a:hover{
    text-decoration: underline;
}

.admin i {
    position: absolute;
    right: 10px;
    color: #fff;
    font-size: 1.2em;
    top: 30px;
    cursor: pointer;
}

.doctor i {
    position: absolute;
    right: 10px;
    color: #fff;
    font-size: 1.2em;
    top: 90px;
    cursor: pointer;
}

.logo {
    position: absolute;
    left: 130px;
    top: -5px;
}

        </style>
    </body>

</html> 