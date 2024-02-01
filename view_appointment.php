<?php
include("conn.php");
$id = intval($_GET['id']);
$sql = "SELECT * FROM appointment WHERE appointmentID = $id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
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
    <head>
        <link href="view_appointment.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                        <button class="button" type="submit" title="Decline">
                            <?php
                                print '<a href="delete_appointment.php?id='.$row['appointmentID'].'">Decline</a>';
                            ?>
                        </button>
                    </div>

                    <div class="separatebutton">
                        <button class="button" type="submit" title="Accept">
                            <?php
                                print '<a href="edit_appointment.php?id='.$row['appointmentID'].'">Accept</a>'; 
                            ?>
                        </button>
                    </div>
                </div>
            </form>

    </div>

</body>
    <?php
        require_once("footer.php");
    ?>

    <!-- <script>
        function viewFunction(){
            var popup=document.getElementById("myPopup");
            popup.classList.add("show");
        }
    </script> -->
</html>