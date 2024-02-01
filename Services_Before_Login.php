<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        require_once("header.php");
    }else{
        require_once('b4header.php');
    }
?>
<html>
    <head>
        <link href="Services2.css" rel="stylesheet">

        <link href="footer.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <div class="colour1">
        <img class="servicepagepic" src="./Resources/How to Groom a Dog Using Scissors.jpeg" title="DogGrooming">

        <div class="servicepage1">

            <h2 class="servicepage1text1">Divi Dog <br>Groomers<br></h2>
            <h3 class="servicepage1text2">Treat Your Pet To a Fine, Luxury, and Comforting Grooming Session to Pop Out Their Elegance.</h3>

            <div class="servicepage1icon">
                <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                <h2 class="servicepageicontext">Personalized Service with free consultations</h2>
            </div>
            <div class="servicepage1icon">
                <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                <h2 class="servicepageicontext">100% satisfaction guarantee</h2>
            </div>

        </div>
    </div>

    <div class="colour2">
        <div class="servicepage2">
            <h2 class="servicepage2text1">We’re with your pet every step of the way</h2>
            <img class="servicepage2pic" src="./Resources/Services.png" title="services">
        </div>
        <img class="servicepagepic" src="./Resources/Groomers Lung_ Wearing a Mask is Essential.jpeg">
    </div>

    <div class="colour1">
        <img class="servicepagepic" src="./Resources/How to keep your pet out of the animal ER.jpeg" title="DogGrooming">

        <div class="servicepage1">

            <h2 class="servicepage1text1">Divi Dog <br>Groomers<br></h2>
            <h3 class="servicepage1text2">Treat Your Pet To a Fine, Luxury, and Comforting Grooming Session to Pop Out Their Elegance.</h3>

            <div class="servicepage1icon">
                <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                <h2 class="servicepageicontext">Personalized Service with free consultations</h2>
            </div>
            <div class="servicepage1icon">
                <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                <h2 class="servicepageicontext">100% satisfaction guarantee</h2>
            </div>
        </div>
    </div>

    <div class="colour2">
        <div class="servicepage2">
            <h2 class="servicepage2text1">We’re with your pet every step of the way</h2>
            <img class="servicepage2pic" src="./Resources/Services.png" title="services">
        </div>
        <img class="servicepagepic" src="./Resources/Premium Photo _ Female veterinarian examining the dog with stethoscope on table in clinic.jpeg">
    </div>

    <div class="colourpage5">

        <div class="servicepage5">
            <h2 class="servicepage1text1">Divi Dog <br>Groomers<br></h2>
            <h3 class="servicepage1text2">Treat Your Pet To a Fine, Luxury, and Comforting Grooming Session to Pop Out Their Elegance.</h3>


            <div>
                <div class="servicepage1icon">
                    <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                    <h2 class="servicepageicontext">Personalized Service with free consultations</h2>
                </div>
            </div>

            <div class="servicepage5content">
                <div class="servicepage5icon2">
                    <img class="servicepage1iconpic" src="./Resources/1.png" title="tick">
                    <h2 class="servicepageicontext">100% satisfaction guarantee</h2>
                </div>
                <img class="servicepage5pic" src="./Resources/Dog appointment.png" title="Cat&Dog" width="450">
            </div>
        </div>

        <div class="form-area">
                <div class="formposition">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/bmnlikjh.json"
                            trigger="hover"
                            colors="primary:#121331"
                            style="width:200px;height:200px">
                        </lord-icon>
                        <h2 align=center class="formtext1">Please Login or Sign Up to Submit Your Appointment!</h2>
                        <div align=center class="logintext">
                            <button class="loginsignuptext"><a href="http://localhost/FYP/login.php">Login</a></button>
                            or
                            <button class="loginsignuptext"><a href="http://localhost/FYP/signup.php">Sign Up</a></button>
                        </div>              
                </div>
        </div>
        <!-- <form action="appointment_insert.php" name="card" method="post">
                <input type="radio" name="slider" id="next-1" checked>
                <input type="radio" name="slider" id="next-2">
                <input type="radio" name="slider" id="next-3">
            <div class="form-area">
                <div class="formposition">
                    <div class="row row-1">

                        <h2 class="formtext1">Book appointment for your lovely pet.</h2>
                        <h2 class="formtext2">Lorem ipsum dolor sit amet consectetur. Egestas tortor tristique sapien dui. </h2>
                        <div class="formbox">
                            <input title="Owner's Name" type="text" maxlength="255" name="cusName" id="cusName" required=required placeholder="Owner's Name"/>
                        </div>
                        <div class="formbox">
                            <input title="Mobile Number" type="tel" maxlength="14" name="cusHP" id="cusHP" required=required placeholder="Mobile No."/>
                        </div>
                        <div class="formbox">
                            <input title="Home Address" type="text" maxlength="255" name="cusAddress" id="cusAddress" required=required placeholder="Home Address"/>
                        </div>
                        <div class="formbox">
                            <input title="Email" type="text" maxlength="255" name="cusEmail" id="cusEmail" required=required placeholder="Email"/>
                        </div>               
                        <div class="nextlabel-1">
                            <label for="next-2" class="next-2">Next</label>
                            <div class="slider"></div>
                        </div>
                    </div>
                </div>

                <div class="formposition">
                    <div class="row row-1">

                        <h2 class="formtext1">Pet's Details</h2>
                        <h2 class="formtext2">Lorem ipsum dolor sit amet consectetur. Egestas tortor tristique sapien dui. </h2>
                        <div class="formbox">
                            <input title="Pet's Name" type="text" maxlength="255" name="petName" id="petName" required=required placeholder="Pet's Name"/>
                        </div>
                        <div class="formbox">
                            <select class="formbox" title="Species" required=required name="petSpecies" id="petSpecies">
                            <option class="formbox" value="">Species</option>
                            <option class="formbox" value="Dog">Dog</option>
                            <option class="formbox" value="Cat">Cat</option>
                            <option class="formbox" value="Snake">Snake</option>
                            </select>
                        </div>
                        <div class="formbox">
                            <input title="Pet's Breed" type="text" maxlength="255" name="petBreed" id="petBreed" required="required" placeholder="Breed *enter '-' if not sure">                
                        </div>
                        <div class="formbox">
                            <select class="formbox" title="Gender" required=required name="petGender" id="petGender">
                            <option class="formbox" value="">Gender</option>
                            <option class="formbox" value="Male">Male</option>
                            <option class="formbox" value="Female">Female</option>
                            </select>
                        </div>
                        <div class="actionlabel">
                            <div class="backlabel">
                                <label for="next-1" class="next-1">Back</label>
                            </div>

                            <div class="nextlabel">
                                <label for="next-3" class="next-3">Next</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="formposition">
                    <div class="row row-1">

                        <h2 class="formtext1">Appointment</h2>
                        <h2 class="formtext2">Lorem ipsum dolor sit amet consectetur. Egestas tortor tristique sapien dui. </h2>
                        <div class="formbox">
                            <input title="Location" type="text" maxlength="255" name="Location" required=required placeholder="Location"/>
                        </div>
                        <div class="formbox">
                            <select class="formbox" title="Service" required=required name="serviceType">
                            <option class="formbox" value="">Type of Services</option>
                            <option class="formbox" value="Grooming">Grooming</option>
                            <option class="formbox" value="Flea">Flea Removal</option>
                            <option class="formbox" value="Bath">Bath</option>
                            <option class="formbox" value="Teeth">Teeth Cleaning</option>
                            </select>               
                        </div>
                        <div class="formbox">
                            <input class="formbox" type="date" title="Preferred Date" placeholder="Preferred Date" name="appointmentDate" required="required" >           
                        </div>
                        <div class="formbox">
                            <select class="formbox" title="Preferred Time" required=required name="appointmentTime">
                            <option class="formbox" value="">Preferred Time</option>
                            <option class="formbox" value="9.00 a.m. - 10.00 a.m.">9.00 a.m. - 10.00 a.m.</option>
                            <option class="formbox" value="10.00 a.m. - 11.00 a.m.">10.00 a.m. - 11.00 a.m.</option>
                            <option class="formbox" value="11.00 a.m. - 12.00 p.m.">11.00 a.m. - 12.00 p.m.</option>
                            <option class="formbox" value="12.00 a.m. - 1.00 a.m.">12.00 p.m. - 1.00 p.m.</option>
                            <option class="formbox" value="1.00 a.m. - 2.00 a.m.">1.00 p.m. - 2.00 p.m.</option>
                            <option class="formbox" value="2.00 a.m. - 3.00 a.m.">2.00 p.m. - 3.00 p.m.</option>
                            <option class="formbox" value="3.00 a.m. - 4.00 a.m.">3.00 p.m. - 4.00 p.m.</option>
                            <option class="formbox" value="4.00 a.m. - 5.00 a.m.">4.00 p.m. - 5.00 p.m.</option>
                            <option class="formbox" value="5.00 a.m. - 6.00 a.m.">5.00 p.m. - 6.00 p.m.</option>
                            </select>
                        </div>
                        
                        <div class="actionlabel">
                            <div class="backlabel">
                                <label for="next-2" class="next-2">Back</label>
                            </div>

                            <div class="nextlabel">
                                <input type="submit" name="submitBtn" value="Submit" class="next">
                            </div>
                        </div>
                    </div>
                </div>

            </form> -->
        </div>
    </div>

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
            <i class='bx bxl-facebook bx-sm'></i>
            <i class='bx bxl-twitter bx-sm'></i>
            <i class='bx bxl-youtube bx-sm'></i>
            <i class='bx bxl-linkedin bx-sm'></i>
        </div>
    </div>
    <div class="footerRight">
        <h1 class="workHourTitle">Working Hours</h1>
        <img class="workHourContent" src="./Resources/footerWorkingHour.jpg">
    </div>

</div>

</body>
</html>