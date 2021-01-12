<?php 
  require_once("../process/authentication.php");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Writing Page</title>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <div class="upper-padding"></div>
    <div id="content">
      <h2 class="page_title">Writing...</h2>
        <form id="article" action="../process/write_process.php" method="POST">
          <label>Title</label>
          <input type="text" name="title">
          <label>Select Board</label>
          <select name="board">
            <option>Food</option>
            <option>Activity</option>
            <option>Room</option>
            <option>Vehicle</option>
          </select>
          <label>Content</label>
          <textarea name="content"></textarea>
          <div class="button-container">
            <button type="submit">write</button>
          </div>
        </form>
    </div>

    <div id="comment">
      <hr>This is made for sharing information <b>Singapore Traveling</b>
      <br><br>
      <i>If you discover error, contect 21600048@handong.edu</i>
    </div>
</body>
</html>
