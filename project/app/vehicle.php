<?php 
  require_once("../process/authentication.php");
  require_once('../process/db_connect.php');

  $id = $_SESSION['user_id'];

  $sql = "SELECT * FROM vehicle_board"; //
  $result = mysqli_query($link,$sql);

  if(!$result){
      echo"<script>alert(\"Database Error\");history.back();</script>";
  }
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

     <div id="comment">
      <hr>This is made for sharing information <b>Singapore Traveling</b>
      <br><br>
      <i>If you discover error, contect 21600048@handong.edu</i>
    </div>

     <div id="content">
        <table>
          <tr>
            <th>board</th><th>title</th><th>writer</th>
          </tr>
          <?php
            function expandTable($post_id,$title,$writer){
              $html = "<tr><td>";
              $html .= $post_id."</td><td class='title'><a href ='../app/read.php?post_id=".$title."&board=vehicle_board'>"; 
              $html .= $title."</td></a><td>";
              $html .= $writer."</td></tr>";

              return $html;
            }
            while ($row = mysqli_fetch_row($result)) {
              echo expandTable($row[1],$row[0],$row[3]);
            }               
          ?>
        </table>
        
        <div class="button-container">
          <a href="../app/write.php"><button>write</button></a>
        </div>
    </div>
</body>
</html>