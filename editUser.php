

<?php
session_start();
?>


<?php 
    if(isset($_SESSION['email'])){
    require_once("header.php");
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
            Edit User
        </title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link rel="icon" href="./Resources/Caringones_logo_transparent.png" type="image/png" sizes="16x16">

    <link href="editUser.css" rel="stylesheet">

</head>

<!--Header of the page-->

<body>
    <div class="banner">
        <!-- <div class="logout">
            <box-icon name='log-out' animation='tada-hover' size='lg' title="Log out" onclick="openPopup()"></box-icon>
        </div>

        <div class="accept-decline" id="popup">
            <p>Are you sure to <br>log out your account?
            </p>
            
            <a href="http://localhost/FYP/Login%20page/login.php">
                <button type="yes" class="btn-yes">
                    Yes
                </button>
            </a>
            

            <button type="no" class="btn-no" onclick="closePopup()">
                No
            </button>
        </div> -->

        <?php
            include("conn.php");
            $cusEmail = $_SESSION["email"];
            $sql = "SELECT * FROM customer WHERE cusEmail = '$cusEmail'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>

        <form action="updateUserProfile.php" method="post">
            
            <div class="userProfile">
                <div class="ellipse">
                    <div class="name">
                        <input type="text" name="name" required="required" placeholder="Enter Your Name" value="<?php echo $row['cusName']; ?>"/>
                    </div>
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
            </div>

            <div class="edit-info">
                <div class="ellipse">
                    <box-icon type='solid' name='edit-alt' size='lg' animation='tada-hover'></box-icon>
                </div>

                <p>
                    Edit Info
                </p>
            </div> -->

            <div id="Doctor Setting">
                <div class="background">
                    <div class="basic-info-rect">
                        <p1>
                            <b>
                                Personal Info
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
                                echo '<p name="cusEmail">' . $row['cusEmail'] . '</p>';
                                ?>
                                <input type="hidden" name="cusEmail" value="<?php echo $row['cusEmail'] ?>">
                        </div>

                        <div class="ic">
                            <box-icon name='id-card' animation='tada-hover' size='md'></box-icon>

                            <input type="text" name="ic" required="required" minlength="12" maxlength="12" placeholder=" Enter Your IC" value="<?php echo $row['cusIC'] ?>"/>
                        </div>

                        <div class="age">
                            <box-icon name='child' animation='tada-hover' size='lg'></box-icon>
                            <input type="text" name="age" required="required" minlength="2" maxlength="3" placeholder=" Enter Your Age" value="<?php echo $row['cusAge'] ?>"/>
                        </div>

                        <div class="gender">
                            <box-icon name='male-sign' animation='tada-hover' size='md'></box-icon>
                            <select name="gender" required="required">
                                <option hidden value=""> Select Gender</option>

                                <option value="Male" 
                                <?php 
                                    if ($row['cusGender'] == "Male") 
                                    { 
                                ?>
                                    selected
                                <?php 
                                    } 
                                ?>
                                >Male</option>



                                <option value="Female" 
                                <?php 
                                    if ($row['cusGender'] == "Female") 
                                    { 
                                ?>
                                    selected
                                <?php 
                                    } 
                                ?>
                                >Female</option>
                            </select>
                        </div>

                        <div class="hp">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/ssvybplt.json"
                                    trigger="hover"
                                    colors="primary:#121331"
                                    style="width:40px;height:40px;left:15px;top:275px;">
                                </lord-icon>
                                <input type="text" name="hp"  minlength="10" maxlength="11" required="required" placeholder=" Enter Your Phone.no" value="<?php echo $row['cusHP'] ?>"/>
                        </div>
                    </div>

                    <div class="pet-info-rect">
                        <p1>
                            <b>
                                Pet Profile
                            </b>
                        </p1>

                        <div class="petName">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/pmegrqxm.json"
                                    trigger="hover"
                                    colors="primary:#121331"
                                    style="width:40px;height:40px;left:18px;top:76px;">
                                </lord-icon>
                                <input type="text" name="petName" placeholder=" Enter Your Pet Name" value="<?php echo $row['petName'] ?>"/>
                        </div>

                        <div class="species">
                            <box-icon name='dog' type='solid' animation='tada-hover' size='md'></box-icon>
                            <input type="text" name="species" placeholder=" Enter Your Pet Species" value="<?php echo $row['petSpecies'] ?>"/>
                        </div>

                        <div class="breed">
                            <box-icon name='category' animation='tada-hover' size='md'></box-icon>
                            <input type="text" name="breed" placeholder=" Enter Your Pet Breed" value="<?php echo $row['petBreed'] ?>"/>
                        </div>

                        <div class="petGender">
                        <box-icon name='male-sign' animation='tada-hover' size='md'></box-icon>
                        <select name="petGender">
                                <option value=""> Select Gender</option>

                                <option value="Male" 
                                <?php 
                                    if ($row['petGender'] == " Male") 
                                    { 
                                ?>
                                    selected
                                <?php 
                                    } 
                                ?>
                                >Male</option>



                                <option value="Female" 
                                <?php 
                                    if ($row['petGender'] == " Female") 
                                    { 
                                ?>
                                    selected
                                <?php 
                                    } 
                                ?>
                                >Female</option>
                            </select>
                        </div>

                        <div class="color">
                            <box-icon name='color' animation='tada-hover' size='md'></box-icon>
                            <input type="text" name="color" placeholder=" Enter Your Pet Color" value="<?php echo $row['petColour'] ?>"/>
                        </div>
                    </div>

                    <!-- <div class="doctor-info-rect">
                        <p1>
                            <b>
                                Doctor Info
                            </b>
                        </p1>
                    </div> -->

                    <div class="privacy-info-rect">
                        <box-icon type='solid' name='lock-alt' animation='tada-hover' size='md'></box-icon>
                        <p1>
                            <b>
                                Privacy Info
                            </b>
                        </p1>

                        <input type="text" name="password" minlength="10" required="required" placeholder=" Change password" value="<?php echo $row['cusPassword'] ?>"/>
                    </div>
                                    
                    <div class="save">
                        <button type="submit" name="submitUser">
                            Save 
                        </button>         
                    </div>
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