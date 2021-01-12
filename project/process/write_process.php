<?php
  require_once('../process/db_connect.php');
  require_once("../process/authentication.php");

  $id = $_SESSION['user_id'];
  $title = $_POST['title'];
  $board = $_POST['board'];
  $content = $_POST['content'];

  if(!isset($title) || !isset($board) || !isset($content)){
        echo "<script>alert('Invalid Information');history.back();</script>";
        exit;
  }

  if($board == 'Food') $board = "food_board";
  else if($board == 'Activity') $board = "activity_board";
  else if($board == 'Room') $board = "room_board";
  else if($board == 'Vehicle') $board = "vehicle_board";

  $sql = "INSERT INTO $board(title,board,content,writer) VALUES ('$title', '$board','$content','$id')";
  $result = mysqli_query($link,$sql);

  if($result){
    echo "<script>location.href='../app/main.php';</script>";
  }
  else{
      echo"<script>alert(\"Database Error\");history.back()</script>";
  }

  mysqli_close($link);
?>

