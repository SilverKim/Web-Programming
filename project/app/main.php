<?php 
  require_once("../process/authentication.php");
  require_once('../process/db_connect.php');

  $id = $_SESSION['user_id'];
?>

<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>
<body> <!-- set a category --> 
    <div id="nav">
        <a href="../app/main.php">Home</a>
        <a href="../app/food.php">Food</a>
        <a href="../app/activity.php">Activity</a>
        <a href="../app/room.php">Rooms</a>
        <a href="../app/vehicle.php">Vehicle</a>
        <a href="../process/logout.php">Logout</a>
    </div>
    <br><br><br>
    <div id="content">
  
    <div class="image">
      <a href="../app/food.php">
        <img src="../img/food.jpg"/>
        <div class="text"><h1>Food</h1></div>
      </a>
    </div>
    <div class="image">
      <a href="../app/activity.php">
        <img src="../img/activity.jpg"/>
        <div class="text"><h1>Activity</h1></div>
      </a> 
    </div>
    <div class="image">
      <a href="../app/room.php">
        <img src="../img/room.jpg" />
        <div class="text"><h1>Room</h1></div>
      </a>
    </div>
    <div class="image">
      <a href="../app/vehicle.php">
        <img src="../img/vehicle.jpg"/>
        <div class="text"><h1>Vehicle</h1></div>
      </a>
    </div>
    
    </div>
    <div id="comment">
      <hr>This is made for sharing information <b>Singapore Traveling</b>
      <br><br>
      <i>If you discover error, Contect 21600048@handong.edu</i>
    </div>
</body>
</html>
