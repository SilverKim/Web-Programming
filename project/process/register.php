<?php
  require_once('../process/db_connect.php');

  $id = $_POST['id'];
  $pw = $_POST['pw'];
  $name=$_POST['name'];
  $year = $_POST['year'];
  
  if(!isset($id) || !isset($pw) || !isset($name) || !isset($year)){
        echo "<script>alert(\"Invalid Information\");history.back();</script>";
        exit;
  }

  $sql = "INSERT INTO project(id,passwd,name,year) VALUES ('$id', '$pw', '$name', '$year')";
  $result = mysqli_query($link,$sql);

  if($result){
    session_start(); 
		$_SESSION['user_id'] = $id;
    echo "<script>alert(\"successfully signed up\");location.href='../First.html';</script>";
  }
  else{
      echo"<script>alert(\"Database Error\");history.back()</script>";
  }

  mysqli_close($link);
?>

