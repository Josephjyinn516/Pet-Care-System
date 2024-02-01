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
        <link href="admin_appointment.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
<body>
    <?php
        include ("conn.php");
        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="colour1">
        <div class="titleappointmenttext">
            <h1>Appointment</h1>
        </div>

        <div>
            <table class="table" cellspacing=0>
                <tr align="center">
                    <!-- <th>ID</th> -->
                    <th>Owner's Name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Type of Services</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            <?php
                while ($row=mysqli_fetch_array($result))
                { 
                    print '<form method="post">';
                    print "<tr align='center'>";
                    $s = $row['status']; // Get the status value from the current row
                    
                    // Display appointment details
                    print '<td>'.$row['cusName'].'</td>';
                    print '<td> <a href="mailto:'.$row['cusEmail'].'">'.$row['cusEmail'].'</a></td>';
                    print '<td>'.$row['cusHP'].'</td>';
                    print '<td>'.$row['serviceType'].'</td>';
                    print '<td>'.$row['appointmentDate'].'<br>'.$row['appointmentTime'].'</td>';
                    
                    // Display icon container
                    print '<td>
                        <div class="iconcontainer">
                            <a href="view_appointment.php?id='.$row["appointmentID"].'">
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/dnmvmpfk.json" trigger="hover" colors="primary:#121331" style="width:30px;height:30px"></lord-icon>
                            </a>';
                    
                    // Display tick icon if status is 1
                    if ($s == 1) {
                        print '<div>
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="hover" colors="primary:#121331" style="width:30px;height:30px"></lord-icon>
                        </div>';
                    }
                    
                    print '</div></td></form></tr>';
                    
                            //         <div>
                            //             <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
                            //             <box-icon name="edit" type="solid"
                            //             trigger="hover"
                            //             animation="auto"
                            //             style="width:30px;height:30px">
                            //             </box-icon>
                            //         </div>

                            //         <div>
                            //             <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            //             <lord-icon
                            //                 src="https://cdn.lordicon.com/kfzfxczd.json"
                            //                 trigger="hover"
                            //                 colors="primary:#121331"
                            //                 state="hover-empty"
                            //                 style="width:30px;height:30px">
                            //             </lord-icon>
                            //         </div>
                        
                            //     </div> 
                            // </td>';

                        print '</tr>';

                }
                mysqli_close($con);
                ?>

            </table>
        </div>
    </div>

</body>
    <?php
        require_once("footer.php");
    ?>

    <script>
        function viewFunction(){
            var popup=document.getElementById("myPopup");
            popup.classList.add("show");
        }
    </script>
</html>