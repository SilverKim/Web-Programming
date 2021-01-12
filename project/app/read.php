<?php 
  require_once("../process/authentication.php");
  require_once('../process/db_connect.php');

  $user_id =  $_SESSION['user_id'];
  $post_id =  $_GET['board']; //kind of board
  $board = $_GET['post_id']; //title

  $sql = "SELECT * FROM $post_id WHERE title = '$board'";
  $result = mysqli_query($link,$sql);

  if(!$result){
      echo "<script>alert(\"Post Does Not Exist\");history.back()</script>";
  }

  $data = mysqli_fetch_row($result);
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Post</title>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <div id="nav">
        <a href="../app/main.php">Home</a>
        <a href="../app/food.php">Food</a>
        <a href="../app/activity.php">Activity</a>
        <a href="../app/room.php">Rooms</a>
        <a href="../app/vehicle.php">Vehicle</a>
        <a href="../process/logout.php">Logout</a>
    </div>

    <div id="comment">
      <hr>This is made for sharing information <b>Singapore Traveling</b>
      <br><br>
      <i>If you discover error, contect 21600048@handong.edu</i>
    </div>


    <div id="content">
      <h2 class="page_title"><?php echo $data[0];?></h2>
        <div id="article">
          <div id="post">
            <?php echo $data[2];?>
          </div>
          
          <?php
          if($user_id == $data[3]){

            if(array_key_exists('remove',$_POST)){
                $sql = "DELETE FROM $post_id WHERE title = '$board'";
                $result = mysqli_query($link,$sql);

                if(!$result){
                  echo"<script>alert(\"Database Error\");history.back();</script>";
                }
                else{
                  echo"<script>alert(\"Successfully removed\");";
                  echo "location.href='../app/main.php';</script>";
                }
            }
            echo "<form method='POST'>";
            echo "<div class='button-container'>";
            echo "<button name='remove'>Remove</button></div></form>";          

          }

          ?>

    </div>
</body>
</html>
