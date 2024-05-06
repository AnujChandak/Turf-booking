
<?php
$name=$_POST['name'];
$activity=$_POST['activity'];
$DoE=date('Y-m-d',strtotime($_POST['DoE']));
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$email=$_POST['email'];

$conn = new mysqli('localhost','root','','booker_details');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into bookingdetails(name,activity,DoE,phone1,phone2,email) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$name, $activity, $DoE, $phone1, $phone2, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name ="viewport" content="widht=device-width, initial-scalee=1.0">
        <title>Book your TURF!</title>
        <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="website.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#dark-mode").click(function(){
                $("body").css({"background-color": "black"});
                $("header").css({"background-color" : "#322F2F"});
            });
            $("#light-mode").click(function(){
                $("body").css({"background-color" : "white"});
                $("header").css({"background-color" : "white"});
            });
        });
    </script>
    </head>

<header>
    <a href="#" class="logo"><i class="fas fa-volleyball-ball"> BookMyTurf</i></a>
    <nav class="navbar navbar-inverse">
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

<body>
    <main class="table">
        <section class="table__header">
            <h1> BOOK YOUR TURF </h1>
            <div class="input-group">
                <input type="search" placeholder="Search for your turf...">
            </div>
            
        </section>
        <section class="table__body">
            <form name="myform" action="FOE confirmation.php">
            <table>
                <thead>
                    <tr>
                    <input type="hidden" name="turf1" id="turf1">
                        <th> No <span class="icon-arrow">&UpArrow;</span></th>
                        <th><center>  Name  <span class="icon-arrow"> &UpArrow;</span></center></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Rating <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Price (per hour) <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Choose Turf</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td> 01 </td>
                        <td><img src="1.jpg"> Urban Sports </td>
                        <td> Andheri </td>
                        <td> 4.5/5 </td>
                        <td> 2000/- </td>
                        <td> <input type="radio" name="turf" id="1" style="width: 25px; height: 25px;"> </td>

                    </tr>
                    <tr>
                        <td> 02 </td>
                        <td><img src="2.jpg"> Trickshot </td>
                        <td> Malad </td>
                        <td> 3.0/5 </td>
                        <td> 2400/- </td>
                        <td> <input type="radio" name="turf" id="2" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 03</td>
                        <td><img src="3.jpg"> Goregaon Sports Club </td>
                        <td> Goregaon </td>
                        <td> 4.8/5 </td>
                        <td> 1800/- </td>
                        <td> <input type="radio" name="turf" id="3" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 04</td>
                        <td><img src="4.jpg"> Gallant Sports Arena </td>
                        <td> Juhu </td>
                        <td> 4.2/5 </td>
                        <td> 1700/- </td>
                        <td> <input type="radio" name="turf" id="4" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 05</td>
                        <td><img src="5.jpg"> Turf Park Football </td>
                        <td> Bandra </td>
                        <td> 2.4/5 </td>
                        <td> 3000/- </td>
                        <td> <input type="radio" name="turf" id="5" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 06 </td>
                        <td><img src="20.jpg"> The Big Turf </td>
                        <td> Vikhroli </td>
                        <td> 3.0/5 </td>
                        <td> 2700/- </td>
                        <td> <input type="radio" name="turf" id="6" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 07 </td>
                        <td><img src="7.jpg"> SFX Sports Astro Turf </td>
                        <td> Thane </td>
                        <td> 3.5/5 </td>
                        <td> 2200/- </td>
                        <td> <input type="radio" name="turf" id="7" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 08 </td>
                        <td><img src="8.jpg"> PASS Play All Super Sports </td>
                        <td> Gundavali </td>
                        <td> 2.0/5 </td>
                        <td> 1200/- </td>
                        <td> <input type="radio" name="turf" id="8" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 09 </td>
                        <td><img src="9.jpg"> Players Turf </td>
                        <td> Saki Naka </td>
                        <td> 4.2/5 </td>
                        <td> 1900/- </td>
                        <td> <input type="radio" name="turf" id="9" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 10 </td>
                        <td><img src="10.jpg"> Emma Sports Academy </td>
                        <td> Powai </td>
                        <td> 4.4/5 </td>
                        <td> 3000/- </td>
                        <td> <input type="radio" name="turf" id="10" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 11 </td>
                        <td><img src="11.jpg"> Astro Park </td>
                        <td> Worli </td>
                        <td> 4.8/5 </td>
                        <td> 1300/- </td>
                        <td> <input type="radio" name="turf" id="11" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    <tr>
                        <td> 12 </td>
                        <td><img src="12.jpg"> Lead Academy  </td>
                        <td> Kandivali </td>
                        <td> 3.8/5 </td>
                        <td> 1000/- </td>
                        <td> <input type="radio" name="turf" id="12" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 13 </td>
                        <td><img src="19.jpg"> Green Pitch Turf  </td>
                        <td> Chembur </td>
                        <td> 2.8/5 </td>
                        <td> 1500/- </td>
                        <td> <input type="radio" name="turf" id="13" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 14 </td>
                        <td><img src="14.jpg"> Greatest Of All Turf </td>
                        <td> Jogeshwari </td>
                        <td> 4.0/5 </td>
                        <td> 2700/- </td>
                        <td> <input type="radio" name="turf" id="14" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 15 </td>
                        <td><img src="15.jpg"> Nanavati Sports Turf </td>
                        <td> Vile Parle </td>
                        <td> 4.1/5 </td>
                        <td> 2500/- </td>
                        <td> <input type="radio" name="turf" id="15" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 16 </td>
                        <td><img src="16.jpg"> FS Turf </td>
                        <td> Churchgate </td>
                        <td> 3.2/5 </td>
                        <td> 2900/- </td>
                        <td> <input type="radio" name="turf" id="16" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 17 </td>
                        <td><img src="17.jpg"> SIWS Sports Complex </td>
                        <td> Wadala </td>
                        <td> 4.8/5 </td>
                        <td> 2100/- </td>
                        <td> <input type="radio" name="turf" id="17" style="width: 25px; height: 25px;"> </td>
                    </tr>

                    <tr>
                        <td> 18 </td>
                        <td><img src="18.jpg"> SPORTSPARK </td>
                        <td> Nalla Sopara </td>
                        <td> 1.8/5 </td>
                        <td> 1100/- </td>
                        <td> <input type="radio" name="turf" id="18" style="width: 25px; height: 25px;"> </td>
                    </tr>
                    
                </tbody>
            </table>
            <center><button type="submit" onclick="radioChecked()" class="btn btn-primary btn-icon btn-icon-mini btn-round" style="margin-bottom: 20px; margin-top: 15px;">BOOK NOW</button></center>
            
        </form>
        </section>

        
    </main>
    <script src="script.js"></script>
<script>
    function radioChecked(){
    
    for(var t="1";t!="18";t++){
        if(document.getElementById(t).checked==true){
            document.getElementById("turf1").value=t;
            break;
        }
    }
}
</script>
</body>
</html>
