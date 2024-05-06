<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name ="viewport" content="width=device-width, initial-scalee=1.0">

        <title>Turf Booking System</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
 
    <!--font awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!--Custon css file link -->

    <link rel="stylesheet" href="website.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(document).ready(function(){

            $("#dark-mode").click(function(){

                $("body").css({"background-color": "black"});

                $("header").css({"background-color" : "#322F2F"});

                $("h1").css({"color" : "white"});

                $("label").css({"color" : "white"});

                $("p").css({"color" : "white"});

                $(".card").css({"background-color" : "#322F2F"});

            });

            $("#light-mode").click(function(){

                $("body").css({"background-color" : "white"});

                $("header").css({"background-color" : "white"});

                $("h1").css({"color" : "black"});

                $("label").css({"color" : "black"});

                $("p").css({"color" : "black"});

                $(".card").css({"background-color" : "#e9ecf7"});

            });

        });

    </script>
    </head>

    <script>

        function validateform(){

        var name=document.myform.name.value;
        var password=document.myform.password.value;
        var num1=document.myform.phone1.value;
        var num2=document.myform.phone2.value;
        var repass=document.myform.repass.value;
        var email=document.myform.email.value

        if (name==null || name==""){
        alert("Name can't be blank");
        return false;
        }

        else if(password.length<8){
        alert("Password must be at least 8 characters long.");
        return false;
        }

        else if(num1.length!=10 || num2.length!=10){
        alert("Mobile numbers must be 10 numbers long");
        return false;
        }

        else if(password!=repass){
        alert("Passwords not matching");
        return false;
        }
        }

    </script>

    <style>

        body{

            background-image: url('FOE 4.jpg');

            background-repeat: no-repeat;

            background-size: cover;

        }

    </style>

    <body>

<!--HEADER SECTION STARTS-->

<header>

    <a href="#" class="logo"><i class="fas fa-volleyball-ball"> BookMyTurf</i></a>

    <nav class="navbar">

    <a href="FOE project.html">HOME</a>
	
    <a href="Review_try.php">REVIEW</a>

    <a class="active" href="http://localhost/FOE_Project/FOE_3.php">BOOK NOW</a>

    <a href="FOE about us.html">ABOUT US</a>

    </nav>

    <div class="icons">

        <i class="fas fa-moon" id="dark-mode"></i>

        <i class="fas fa-sun" id="light-mode"></i>

        <i class="fas fa-bars" id="menu-bars"></i>

        <i class="fas fa-search" id="search-icon"></i>

    </div>

</header>

<!--HEADER SECTION ENDS-->

<!--search form -->

<form id="search-form">
    <input type="search" placeholder="search here..."name="" id="search-box"></input>
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!--home section starts-->

<form name="myform" method="post" onsubmit="return validateform()" action="FOE sorting.php">

<div class="container blog-page" style="padding-left: 80px; padding-right: 80px; padding-top: 30px; padding-bottom: 30px;">

    <div class="row clearfix">

        <div class="col-lg-4 col-md-12" style="opacity: 0.93;">

                <div class="card single_post" style="padding-left: 40px; padding: 80px; border-radius: 150px; border-color:rgba(0, 255, 255, 0.904); border:solid;">

                    <center><h1 style="font-size: xx-large;" class="font-cond-l fg-accent lts-md mgb-10" style="padding-bottom: 10px;">Booking Form</h1>

                    <label style="font-size: 28px;">Name:</label>

                    <input type="text" size=20px name="name" style="border: black solid 1px; border-radius: 10px; border:solid;font-size: 20px; height: 38px;"></input>

                    <br></br>

                    <big><label style="font-size: 28px;">Activity?</label>

                        <select id="cars" name="activity" style="font-size: 20px; border: 3px solid black; border-radius: 10px">

                            <option value="Cricket" name="Cricket">Cricket</option>

                            <option value="Football" name="Football">Football</option>

                            <option value="Tennis" name="Tennis">Tennis</option>

                            <option value="Events" name="Events">Events</option>

                          </select>

                        <label style="font-size: 28px; padding-left: 20px">DoE:</label>&emsp;</big>

                        <input type="date" name="DoE" value="DoE" size=20px style="border: black solid 1px;border-radius: 10px;font-size: 20px; border:solid; height: 38px;"/>
 

                    <br></br>

                    <label style="font-size: 25px;">Phone1:</label>

                    <input type="text" name="country code" value="+91" size=1px style="border: black solid 1px;border-radius: 10px;font-size: 20px; border:solid; height: 38px;"/>

                    <input type="text" name="phone1" size=11px style="border: black solid 1px;border-radius: 10px;font-size: 20px; border:solid; height: 38px;"/>

                    <br><br>

                    <label style="font-size: 25px;">Phone2:</label>

                    <input type="text" name="country code" value="+91" size="1px" style="border: black solid 1px;border-radius:10px; font-size: 20px; border:solid;height: 38px;"/>

                    <input type="text" name="phone2" size="11px" style="border: black solid 1px;border-radius:10px; font-size: 20px; border:solid;height: 38px;"/> <br><br>

                   

                    <label style="font-size: 25px;">Email Id :</label>

                    <input type="email" id="email" name="email" size=30px pattern="\S+@\S+\.\S+" style="border: black solid 1px;border-radius: 10px;font-size: 20px; border:solid;"/> <br>

                    <br><br>

                    <label style="font-size: 25px;">Password:</label>

                    <input type="Password" id="password" name="password" style="border: black solid 1px;border-radius:10px;font-size: 20px; 10px; border:solid;"> <br>

                    <br><br>

                    <label style="font-size: 25px;">Confirm Password:</label>

                    <input type="Password" id="repass" name="repass" style="border: black solid 1px;border-radius: 10px;font-size: 20px; border:solid;"> <br> <br>
                    <button type="submit" class="btn btn-primary btn-icon btn-icon-mini btn-round">SUBMIT</button>
                    <button type="reset" class="btn btn-primary btn-icon btn-icon-mini btn-round">RESET</button>
                    </center>
                </div>
        </div>
    </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--Custom js file link-->

    <script src="website.js"></script>    

    </body>

</html>