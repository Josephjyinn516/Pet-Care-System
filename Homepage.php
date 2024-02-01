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



<html>
    <head>
        <meta charset="utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Caringones
        </title>
        <link rel="stylesheet" href="Homepage1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    
    <body>
    <!-- <div class="rectCard">
            <box-icon name='log-out' rotate='180' ></box-icon>
            <div class="userProfile">
                <div class="ellipse">
                    <h2>
                        Username
                    </h2>
                    <p>
                    Login ID: A12345
                    </p>
                </div>
            </div>

            <div class="notification">
                <div class="ellipse">
                <lord-icon
                    src="https://cdn.lordicon.com/psnhyobz.json"
                    trigger="hover"
                    style="width:40px;height:40px;left:13px;top:13px;cursor:pointer;">
                </lord-icon>
                </div>

                <p>
                    Inbox
                </p>
            </div>

            <div class="edit-info">
                <div class="ellipse">
                <i class='bx bxs-edit-alt bx-md'></i>
                </div>

                <p>
                    Edit Info
                </p>
            </div>

            <div class="email">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/diihvcfp.json"
                    trigger="hover"
                    style="width:40px;height:40px;left:-31px;top:-95px;">
                </lord-icon>

                <p>
                    Email Address
                </p>
            </div>

            <div class="phone">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/ssvybplt.json"
                    trigger="hover"
                    style="width:40px;height:40px; left:36px;top:-1903px;">
                </lord-icon>

                <p>
                    Phone
                </p>
            </div>

            <div class="address">
                <box-icon name='location-plus' size='xs' animation='tada-hover'>

                </box-icon>
                <p>
                Address
                </p>
            </div>
        </div> -->
        <!-- <header>
            <nav>
                <div class="logo">
                    <img src="Caringones_logo_transparent.png">
                </div>

                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="http://localhost/FYP/Homepage/Homepage.html">
                                HOME  
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                ABOUT US  
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                SHOP 
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                SERVICES 
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-icons">
                    <i class='bx bx-user'></i>
                    <i class='bx bx-shopping-bag'></i>
                </div>
            </nav>
        </header> -->
            <!-- <div class="dogFood">
                <img src="image001-removebg-preview__1_-removebg-preview.png" width="350">
            </div> -->


        <div class="banner">
            <div class="leftSide">
                <h1>
                    Mighty Dog 
                    with Chese.
                </h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur. 
                    Tristique id nec eu velit tristique massa.
                </p>
                
                <a href="http://localhost/FYP/shopPage.php">
                    <button>
                        SHOP NOW
                    </button>
                </a>
                
            </div>

                    <div class="rightSide">
                        <img src="./Resources/beagle-removebg-preview.png" width="1300">
                    </div>

                    <div class="Chat">
                        <div class="chatBubble">
                            <img src="./Resources/chatbubbleresize.png" width="490">
                        </div> 

                        <div class="dogFood1">
                            <img src="./Resources/dog_food_1.png" width="180">
                        </div>

                        <div class="dogFood2">
                            <img src="./Resources/dog_food__2_-removebg-preview.png" width="190">
                        </div>
                    </div>
        </div>

        <div class="banner2">
            <div class="middle">
                <h1>
                    <span class="black">
                        Our
                    </span>

                    <span class="orange">
                        Services
                    </span>
                </h1>
            </div>
        </div>

        <div class="servicesContentImg">
            <div class="image-row">
                <img src="./Resources/3.png" alt="image1" width="200" height="200">
                <img src="./Resources/4.png" alt="image2" width="200" height="200">
                <img src="./Resources/5.png" alt="image3" width="200" height="200">
                <img src="./Resources/6.png" alt="image4" width="200" height="200">
            </div> 
        </div>

        <div class="servicesWord">
            <ul class="word-row">
                <li>
                    <w1>
                        Bathing
                    </w1>

                    <w2>
                        Nail trimming
                    </w2>

                    <w3>
                        Vaccinations
                    </w3>

                    <w4>
                        Suppliers
                    </w4>
                </li>
            </ul>
        </div>

        <div class="serviceDetails">
            <d1>
                Lorem ipsum dolor sit amet<br>
                consectetur. Tristique id nec eu<br>
                velit tristique massa.
            </d1>

            <d2>
                Lorem ipsum dolor sit amet<br>
                consectetur. Tristique id nec eu<br>
                velit tristique massa.
            </d2>

            <d3>
                Lorem ipsum dolor sit amet<br>
                consectetur. Tristique id nec eu<br>
                velit tristique massa.
            </d3>

            <d4>
                Lorem ipsum dolor sit amet<br>
                consectetur. Tristique id nec eu<br>
                velit tristique massa.<br><br><br>
            </d4>
        </div>

        <div id="about-us">
        <div class="banner3">
            <div class="middle2">
                <h1>
                    <span class="orange2">
                        Why
                    </span>

                    <span class="black2">
                        Us?
                    </span>
                </h1>
            </div>

            <div class="img1">
                <img src="./Resources/7.png" alt="image5" width="250" height="250">

                <wu1>
                    In-Home Consultation
                </wu1>

                <wud1>
                    Lorem ipsum dolor sit amet 
                </wud1>
            </div>

            <div class="img2">
                <img src="./Resources/8.png" alt="image5" width="250" height="250">

                <wu2>
                    Insured Checked
                </wu2>

                <wud2>
                    Lorem ipsum dolor sit amet 
                </wud2>
            </div>

            <div class="img3">
                <img src="./Resources/9.png" alt="image5" width="250" height="250">

                <wu3>
                    Book Service 24/7
                </wu3>

                <wud3>
                    Lorem ipsum dolor sit amet 
                </wud3>
            </div>

            <div class="img4">
                <img src="./Resources/10.png" alt="image5" width="250" height="250">

                <wu4>
                    Experienced, Pro Staff
                </wu4>

                <wud4>
                    Lorem ipsum dolor sit amet 
                </wud4>
            </div>

            <div class="dog">
                <img src="./Resources/Untitled design.png" alt="image5" width="1300" height="356">
            </div>
        </div>
        </div>
        

        <div class="banner4">
            <div class="middle3">
                <h1>
                    <span class="orange3">
                        Perfect
                    </span>

                    <span class="black3">
                        Services!
                    </span>
                </h1>
            </div>

            <div class="review-msg">
                <span class="msg">
                    Lorem ipsum dolor sit amet consectetur. Egestas tortor tristique<br> 
                    sapien dui. Viverra sit tortor a sit est adipiscing nec nam id.<br>
                    Mauris lacus ut sed.
                </span>
            </div>

            <div class="editor-name">
                <img src="./Resources/color-paint.png" alt="image5" width="120" height="120">

                <span>
                    Sin Chew Daily
                </span>
            </div>

            <div class="rect">
                <a href="https://www.google.com/maps?ll=3.066854,101.693057&z=17&t=m&hl=en&gl=MY&mapclient=embed&cid=9196796453629511562" title="Locate us">
                    <i class='bx bx-location-plus bx-tada-hover'>

                    </i>
                </a>

                    <a href="https://www.google.com/maps?ll=3.066854,101.693057&z=17&t=m&hl=en&gl=MY&mapclient=embed&cid=9196796453629511562">
                        <span class="address">
                            no 74-1, Jalan Radin Anum 1, Bandar Baru Sri Petaling
                        </span>
                    </a>
                    
                    <a href="tel:+60172649663" title="Contact us">                       
                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/ssvybplt.json"
                                trigger="hover"
                                colors="primary:#ffffff"
                                style="width:40px;height:40px;left: 650px; top:3px;">
                            </lord-icon>
                    </a>
                        <div class="contact">
                            <a href="tel:+60172649663">
                                <span class="phone">
                                    +60172649663
                                </span>
                            </a>
                    
                        </div>
                            <a href="mailto:info@Caringones.com">
                                <span class="email">
                                    info@Caringones.com
                                </span>
                            </a>
                                
                            <a href="mailto:info@Caringones.com" title="Email us">
                                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                    <lord-icon
                                        src="https://cdn.lordicon.com/diihvcfp.json"
                                        trigger="hover"
                                        colors="primary:#ffffff"
                                        style="width:40px;height:40px; left: 1100px; top:-40px;">
                                    </lord-icon>
                            </a>
                <div class="live-map">
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.186553026229!2d101.69134108284942!3d3.0671197849126983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4b01dfe57e73%3A0x7fa195a5da28c78a!2sFur%26Paws%20pets%20shop!5e0!3m2!1sen!2smy!4v1681921039247!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </p>  
                </div>

                </div>
            </div>
        
        <div class="banner5">
                    <div class="footerContent">
                <div class="footerLeft">
                    <div>
                        <img class="footerLogo" src="./Resources/Caringones_logo_transparent1.png">
                    </div>
                    <p class="leftText1">
                        Lorem ipsum dolor sit amet consectetur. Egestas tortor tristique sapien dui. Viverra sit tortor a sit est adipiscing nec nam id. 
                    </p>
                    <p class="socialTitle">
                        Follow us on:
                    </p>
                    <div class="socialLogo">
                        <i class='bx bxl-facebook bx-sm' onclick ="location.href='https://www.facebook.com';" title="Facebook"></i>
                        <i class='bx bxl-twitter bx-sm' onclick ="location.href='https://www.twitter.com';" title="Twitter"></i>
                        <i class='bx bxl-youtube bx-sm' onclick ="location.href='https://www.youtube.com/@ChillwithTaiki';" title="Youtube"></i>
                        <i class='bx bxl-linkedin bx-sm' onclick ="location.href='https://www.Linkedin.com';" title="Linkedin"></i>
                    </div>
                </div>
                <div class="footerRight">
                    <h1 class="workHourTitle">Working Hours</h1>
                    <img class="workHourContent" src="./Resources/footerWorkingHour.jpg">
                </div>

            </div>
        </div>   
    </body>

</html>

