<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "booker_details";

   $review=$_POST['review'];
     
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
            echo '<p style="font-size: 22px; padding-left: 70px"> TURF: '.$row['name'];
            echo '<p style="font-size: 32px; padding-left: 70px"> AREA: '.$row['review'];
            echo '<p style="font-size: 32px; padding-left: 70px"> RATING: '.$row['rating'];
            
        }
      }
      $conn->close();
  }
?>