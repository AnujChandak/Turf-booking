<?php
$del_ele = $_REQUEST['deleted_ele'];
     echo $del_ele;
// connect the database with the server
$conn = new mysqli('localhost','root','','booker_details');
  
 // if error occurs 
 if($conn->connect_error){
   die('Connection Failed : ' .$conn->connect_error);
}else{
   $sql = ("UPDATE drinks SET Qty='0' WHERE id=$del_ele"); 

   $sql = "SELECT * FROM `selectedturf`";
   $result=mysqli_query($conn, $sql);  
   $row=mysqli_fetch_assoc($result);

   

   $sql2 = "SELECT * FROM `bookingdetails` ORDER BY `bookingdetails`.`id` DESC";
   $result2 = mysqli_query($conn, $sql2);
   $rows=mysqli_fetch_assoc($result2);
}
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>BookMyTurf</title>

        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
 
    <!--font awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!--Custon css file link -->

    <link rel="stylesheet" href="website.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="website2.css"></script>

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

    <body style="background-image: url('try3.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        
    <header>

    <a href="#" class="logo"><i class="fas fa-volleyball-ball"> BookMyTurf</i></a>

    <nav class="navbar">

    <a href="FOE project.html">HOME</a>
	
    <a href="Review.php">REVIEW</a>

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


<div class="container blog-page" style="padding-left: 80px; padding-right: 80px; padding-top: 30px; padding-bottom: 30px;">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12" style="opacity: 0.9;">
                <div class="card single_post" style="padding-left: 40px; padding: 40px; border-radius: 80px; border-color:rgba(0, 255, 255, 0.9); border:solid;">
                <form method="post" action="FOE billing.php" >
                <table>
                    <tr>
                        <td>
    <center>
                <p style="font-size: 40px;"><b>Confirmation Page</b></p>  <br> 
</center>
    
    <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "booker_details";

   
     
   // connect the database with the server
   $conn = new mysqli('localhost','root','','booker_details');
     
    // if error occurs 
    if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into turfno(turf) values(?)");
      $stmt->bind_param("s",$turf);
      $stmt->execute();  

      $sql = "SELECT * FROM `selectedturf`";
      $result=mysqli_query($conn, $sql);  
      $row=mysqli_fetch_assoc($result);

      $img=$turf.".jpg";
      echo '<img style="width: 500px; height: 250px; padding-left: 70px" src="'.$img.'">';
      echo '<br></br>';

      $sql2 = "SELECT * FROM `bookingdetails` ORDER BY `bookingdetails`.`id` DESC";
      $result2 = mysqli_query($conn, $sql2);
      $rows=mysqli_fetch_assoc($result2);

      echo '<p style="font-size: 32px; padding-left: 70px"> SPORT: '.$rows['activity'];
      
      while($row = mysqli_fetch_assoc($result)){
        if($row['no']=="0".$turf){
            echo '<p style="font-size: 32px; padding-left: 70px"> TURF: '.$row['name'];
            echo '<p style="font-size: 32px; padding-left: 70px"> AREA: '.$row['area'];
            echo '<p style="font-size: 32px; padding-left: 70px"> RATING: '.$row['rating'];
            echo '<p style="font-size: 32px; padding-left: 70px"> PRICE (/hr): '.$row['price']; 
        }
      }
      $conn->close();
  }
?>
<p style="font-size: 32px; padding-left: 70px">From:  <input type="time" name="t_start" style="font-size: 22px; border: 2px solid black; border-radius: 20px;"> &nbsp; To: <input type="time" name="t_end" style="font-size: 22px; border: 2px solid black; border-radius: 20px;">
</td>

<td style="padding-left: 280px;">
<center>
    <p style="font-size: 18px; padding-left: 70px;padding-right: 70px;"> Add something to quench your thirst?</p><br>
</center>
    <img src="img1.jpg" style="width: 130px; height: 90px; padding-right: 30px;">(Rs.40) <input style="width: 80px; font-size: 22px" type="number" placeholder="QTY" min=0 max=50 name="cola" />
    <p style="font-size: 20px">Coca-Cola </p>

    <img src="img3.jpg" style="width: 130px; height: 90px; padding-right: 30px;">(Rs.20) <input style="width: 80px; font-size: 22px" type="number" placeholder="QTY" min=0 max=50 name="nimbooz"/>
    <p style="font-size: 20px">Nimbooz </p>

    <img src="img4.jpg" style="width: 130px; height: 90px; padding-right: 30px;">(Rs.35) <input style="width: 80px; font-size: 22px" type="number" placeholder="QTY" min=0 max=50 name="sting"/>
    <p style="font-size: 20px">Sting Energy</p>

    <img src="img5.jpg" style="width: 130px; height: 90px; padding-right: 30px;">(Rs.110) <input style="width: 80px; font-size: 22px" type="number" placeholder="QTY" min=0 max=50 name="monster"/>
    <p style="font-size: 20px">Monster Energy</p>

    <img src="img6.jpg" style="width: 130px; height: 90px; padding-right: 30px;">(Rs.125) <input style="width: 80px; font-size: 22px" type="number" placeholder="QTY" min=0 max=50 name="redbull"/>
    <p style="font-size: 20px">Red Bull Energy</p>
    <br>

 

</td>
</tr>

<br>
<tr>
<td colspan="2">
                <center>
                    <button type="submit" class="btn btn-primary btn-icon btn-icon-mini btn-round">CONFIRM</button>
                    <button type="reset" class="btn btn-primary btn-icon btn-icon-mini btn-round">BACK</button>
                </center>
</td>
</tr>
</table>
</form>
            </div>
        </div>
    </div>
</div>
    </body>
</html>

