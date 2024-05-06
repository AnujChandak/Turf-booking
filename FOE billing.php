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



<script>
      setTimeout(function () {
        window.location.href = "FOE project.html";
      }, 10000);
</script>

    </head>

    <body style="background-image: url('try2.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        
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

<div class="container blog-page" style="padding-left: 80px; padding-right: 80px; padding-top: 30px; padding-bottom: 30px;">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12" style="opacity: 0.8;">
                <div class="card single_post" style="padding-left: 40px; padding: 40px; border-radius: 80px; border-color:rgba(0, 255, 255, 0.9); border:solid;">

<table>
<tr>
<td>

<?php
$t_start=$_REQUEST['t_start'];
$t_end=$_POST['t_end'];
$cola_qty=$_POST['cola'];
$nimbooz_qty=$_POST['nimbooz'];
$sting_qty=$_POST['sting'];
$monster_qty=$_POST['monster'];
$redbull_qty=$_POST['redbull'];
  
$conn = new mysqli('localhost','root','','booker_details');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    
    $s=strtotime($t_start);
    $s= date('h',$s);
  
    $e=strtotime($t_end);
    $e= date('h',$e);

    $d=abs($s-$e);

      $sql = "SELECT * FROM `turfno` ORDER BY `turfno`.`id` DESC";
      $result=mysqli_query($conn, $sql);  
      $row=mysqli_fetch_assoc($result);

      $turf=$row['turf'];

      $img=$turf.".jpg";
      echo '<img style="width: 500px; height: 250px; padding-left: 70px" src="'.$img.'">';
      echo '<br></br>';

      $sql2 = "SELECT * FROM `bookingdetails` ORDER BY `bookingdetails`.`id` DESC";
      $result2 = mysqli_query($conn, $sql2);
      $rows=mysqli_fetch_assoc($result2);
      echo '<p style="font-size: 32px; padding-left: 70px"> BOOKER NAME: '.$rows['name'];
      echo '<p style="font-size: 32px; padding-left: 70px"> SPORT: '.$rows['activity'].'<p></p>';

      $sql2 = "SELECT * FROM `selectedturf`";
      $result2 = mysqli_query($conn, $sql2);
      $rows=mysqli_fetch_assoc($result2);
      $bill=0;
      
      
      while($rows = mysqli_fetch_assoc($result2)){
        if($rows['no']=="0".$turf){
            $bill=((int)$rows['price'])*$d;
            echo '<p style="font-size: 32px; padding-left: 70px"> TURF: '.$rows['name'];
            echo '<p style="font-size: 32px; padding-left: 70px"> AREA: '.$rows['area'];
            echo '<p style="font-size: 32px; padding-left: 70px"> RATING: '.$rows['rating'];
            echo '<p style="font-size: 32px; padding-left: 70px"> TIMINGS: '.$t_start.' to '.$t_end;
            echo '<p style="font-size: 32px; padding-left: 70px"> TURF PRICE: '.$bill.'/- (for '.$d.' hrs)'; 
        }
      }

      if($cola_qty){
        $bill+= $cola_qty * 40;  
      }
      
      if($nimbooz_qty){
        $bill+= $nimbooz_qty * 20;  
      }
      
      if($sting_qty){
          $bill+= $sting_qty * 35;  
        }
      
      if($monster_qty){
          $bill+= $monster_qty * 110;  
        }
      
      if($redbull_qty){
          $bill+= $redbull_qty * 125;  
        }
    
        echo '<p style="font-size: 32px; padding-left: 70px"> TOTAL BILL: ';
        echo '<p style="font-size: 32px; padding-left: 70px"> =======';
        echo '<p style="font-size: 32px; padding-left: 70px">'.$bill.'/-';
        echo '<p style="font-size: 32px; padding-left: 70px"> =======';

      $conn->close();
  }
?>
</td>
<td style="padding-left: 270px">
    <?php
if($cola_qty){
        echo '<img src="img1.jpg" style="width: 130px; height: 90px; padding-right: 30px;">'.'<p style="font-size: 20px;display: inline;">Coca-Cola &ensp; X'.$cola_qty.'<p></p>';
        
      }
      
      if($nimbooz_qty){
        echo '<img src="img3.jpg" style="width: 130px; height: 90px; padding-right: 30px;">'.'<p style="font-size: 20px; display: inline;">Nimbooz &ensp; X' .$nimbooz_qty.'<p></p>';
        
      }
      
      if($sting_qty){
        echo '<img src="img4.jpg" style="width: 130px; height: 90px; padding-right: 30px;">' . '<p style="font-size: 20px; display: inline;">Sting &ensp; X' .$sting_qty.'<p></p>';
        }
      
      if($monster_qty){
        echo '<img src="img5.jpg" style="width: 130px; height: 90px; padding-right: 30px;">'.'<p style="font-size: 20px; display: inline;">Monster &ensp; X' .$monster_qty.'<p></p>';
        }
      
      if($redbull_qty){
        echo '<img src="img6.jpg" style="width: 130px; height: 90px; padding-right: 30px;">'.'<p style="font-size: 20px; display: inline;">Red Bull &ensp; X' .$redbull_qty.'<p></p>';
        }
    ?>
</td>
    </tr>

<center>
              <p class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg">
                Booking Confirmed!!! Redirecting to home page....
              </p>
    </center>

</table>

    </div>
    </div>
    </div>
    </div>

</body>
</html>