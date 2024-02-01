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



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8>
        <meta name="viewport" content="width=device-width", initial-scale=1>
        <title>
            Welcome to Caring Ones' Doctor!
        </title>
        <link rel="stylesheet" href="popup.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
    <?php
        include ("conn.php");
        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($con, $sql);
    ?>
        <div class="banner">
            <h1>
                Appointment
            </h1>
<!-- 
            <form method = "POST">

                <div class="accept-decline" id="popup">
                        <p>Are you sure<br> 
                            [username]/[petname]<br>
                            is done with his/her appointment? 
                        </p>
            
                        <button type="yes" class="btn-yes">
                            <?php

                                print '<a href="docUpdateAppointment.php?id='.$row['appointmentID'].'">Yes</a>';
                            ?>
                            
                        </button>

                        <button type="no" class="btn-no" onclick="closePopup()">
                            No
                        </button>
                </div>

            </form> -->


 
            

            <table class="table">
                <thread>
                    <th>
                        Owner'Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Tel
                    </th>
                    <th>
                        Types of Services
                    </th>
                    <th>
                        Date & Time
                    </th>
                    <th>
                        Action
                    </th>
                </thread>
                <tbody>
                    <?php
                while ($row=mysqli_fetch_array($result))
                { 
                    print '<form method="post">';
                    print "<tr align='center'>";
                    $s = $row['status']; // Get the status value from the current row
                    
                    if ($s == 1){

                        print '<td>'.$row['cusName'].'</td>';
                        print '<td> <a href="mailto:'.$row['cusEmail'].'">'.$row['cusEmail'].'</a></td>';
                        print '<td>'.$row['cusHP'].'</td>';
                        print '<td>'.$row['serviceType'].'</td>';
                        print '<td>'.$row['appointmentDate'].'<br>'.$row['appointmentTime'].'</td>';
                        echo '<td>
                            <div class="action-btn">
                            <a href = "docViewDetails.php?id='.$row["appointmentID"].'">
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                    <lord-icon id="popup-btn"
                                        src="https://cdn.lordicon.com/dnmvmpfk.json"
                                        trigger="hover"
                                        style="width:40px;height:40px;cursor:pointer">
                                    </lord-icon>
                            </a>
                                
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon onclick="openPopup()"
                                    src="https://cdn.lordicon.com/egiwmiit.json"
                                    trigger="hover"
                                    style="width:40px;height:40px;cursor:pointer">
                                </lord-icon>
                                <div class="accept-decline" id="popup">
                                    <p>Are you sure<br> 
                                        '.$row['cusName'].'<br>
                                        is done with his/her appointment? 
                                    </p>
                        
                                    <button type="yes" class="btn-yes">                                                   
                                        <a href="docUpdateAppointment.php?id='.$row['appointmentID'].'">Yes</a>                                    
                                    </button>
            
                                    <button type="no" class="btn-no" onclick="closePopup()">
                                        <a href="docDeleteAppointment.php?id='.$row['appointmentID'].'">No</a>
                                    </button>
                                </div>';
                                
                        
                    }
                    // Display appointment details
                }
                mysqli_close($con);
                ?>

                            <!-- <div id="info-popup">
                            
                                <div class="owner">
                                    <h2>Owner's Details</h2>
                                    <p1>Owner' Name</p1>
                                    <p2>Tel</p2>
                                    <p3>Home Address</p3>
                                    <p4>Email</p4>
                                </div>
                    
                                <div class="pet">
                                    <h2>Pet's Details</h2>
                                    <p1>Pet's name</p1>
                                    <p2>Species</p2>
                                    <p3>Breed</p3>
                                    <p4>Gender</p4>
                                </div>
                    
                                <div class="appointment">
                                    <h2>
                                        Appointment
                                    </h2>
                                    <p1>Types of services</p1>
                                    <p2>Date</p2>
                                    <p3>Time</p3>
                                </div>
                            </div> -->
                            
                                        

                    
                            
                            
                                
                            </td>
                        
                    </tbody>

            </table>
        </div>
                        <?php
            include("footer.php");
        ?>
                        
            
        <script>
            var popupBtn = document.getElementById('popup-btn');
            var popupBox = document.getElementById('info-popup');

            document.addEventListener('click', function(event) {
            if (event.target !== popupBtn && event.target.parentNode !== popupBox) {
                popupBox.style.display = 'none';
            }
            });

            popupBtn.addEventListener('click', function() {
            popupBox.style.display = 'block';
            });


        </script>

        <script>
            let popup = document.getElementById("popup");

            function openPopup(){
                popup.classList.add("open-popup");
            }

            function closePopup(){
                popup.classList.remove("open-popup");
            }
        </script>

        <!-- <script>
            let yesPopup = document.getElementById("yes-popup");

            function openYesPopup(){
                yesPopup.classList.add("openYes");
            }

            function closeYesPopup(){
                yesPopup.classList.remove("openYes");
            }
        </script> -->
    </body>


