<?php
	require_once('../process/db_connect.php');
	
	$id=$_POST['id'];
	$pw=$_POST['pw'];

	if(!isset($id) || !isset($pw)){
        echo "<script>alert(\"Invalid Information\");history.back();</script>";
        exit;
  }

  $sql = "SELECT * FROM project WHERE id = '$id' AND passwd = '$pw'";
  $result = mysqli_query($link,$sql);

  if($result){
      //Login fail
      if(mysqli_num_rows($result) == 0){
   			  echo"<script>alert(\"Invalid Information\");history.back()</script>";
      }
      //Login success
      else{
          session_start(); 
		       $_SESSION['user_id'] = $id;

           echo "<script>location.href='../app/main.php';</script>";
      }
  }
  else{
      echo"<script>alert(\"Database Error\");history.back()</script>";
  }

  mysqli_close($link);
?>
