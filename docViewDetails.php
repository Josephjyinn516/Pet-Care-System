<?php
session_start();
?>


<?php 
    if(isset($_SESSION['email'])){
    require_once("doctorHeader.php");
    }else{
        require_once('b4header.php');
    }
?>

<?php
include("conn.php");
$id = intval($_GET['id']);
$sql = "SELECT * FROM appointment WHERE appointmentID = $id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8>
        <meta name="viewport" content="width=device-width", initial-scale=1>
        <title>
            Welcome to Caring Ones' Doctor!
        </title>
        <link rel="stylesheet" href="docViewDetails.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>

<div class="colour1">
    <form method="post">
        <div class="titleappointmenttext">
            <h1>Appointment</h1>
        </div>
        <div class="content">
            <div class="title">
                <div class="titlecontent1">
                    <div class="titlesign">
                        Owner's Name :
                    </div>
                    <div class="titlesign">
                        Mobile No. :
                    </div>
                    <div class="titlesign">
                        Home Address :
                    </div>
                    <div class="titlesign">
                        Email :
                    </div>
                </div>

                <div class="titlecontent2">
                    <?php
                        print '<div class="titlesign">'.
                                $row['cusName'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['cusHP'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['cusAddress'].
                                '</div>
                                <div class="titlesign">'.
                                    '<a href="mailto:'.$row
                                    ['cusEmail'].'">'.$row['cusEmail'].'</a>'.
                                '</div>'
                    ?>
                </div>
            </div>

            <div class="title">
                <div class="titlecontent1">
                    <div class="titlesign">
                        Pet's Name :
                    </div>
                    <div class="titlesign">
                        Species :
                    </div>
                    <div class="titlesign">
                        Breed :
                    </div>
                    <div class="titlesign">
                        Gender :
                    </div>
                </div>

                <div class="titlecontent2">
                    <?php
                        print '<div class="titlesign">'.
                                $row['petName'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['petSpecies'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['petBreed'].
                                '</div>
                                <div class="titlesign">'.
                                    $row['petGender'].
                                '</div>'
                    ?>
                </div>
            </div>

            <div class="title">
                <div class="titlecontent1">
                    <div class="titlesign">
                        Location :
                    </div>
                    <div class="titlesign">
                        Types of Services :
                    </div>
                    <div class="titlesign">
                        Appointment Date :
                    </div>
                    <div class="titlesign">
                        Appointment Time :
                    </div>
                </div>

                <div class="titlecontent2">
                    <?php
                        print '<div class="titlesign">'.
                                $row['Location'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['serviceType'].
                                '</div>
                                <div class="titlesign">'.
                                        $row['appointmentDate'].
                                '</div>
                                <div class="titlesign">'.
                                    $row['appointmentTime'].
                                '</div>'
                    ?>
                </div>
            </div>

        </div>

        
            <div class="buttoncontent">
                <div class="separatebutton">
                    <button class="button" type="submit" title="Close">
                        <a href="http://localhost/FYP/popup.php">
                            Close
                        </a>
                    </button>
                </div>
            </div>
        </form>

</div>

</body>