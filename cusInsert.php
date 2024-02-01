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