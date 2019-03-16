<?php

$db_host="localhost";
$db_user="root";
$db_passwd="123456";
$db_name="csee_student";
 $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if(mysqli_connect_error($conn)){
	echo "Database connction failed: ".mysqli_connect_error();
} else { /*echo "Database connected."; */ } 

$result = mysqli_query($conn,"SELECT * FROM csee_student WHERE major1='CS'");

echo "<table border='1'>";
echo "<tr><th>idx</th><th>student_no</th><th>semester</th><th>name</th><th>major1</th><th>major2</th></tr>";

while($row = mysqli_fetch_array($result)){
	$idx=$row['idx'];
	$student_no=$row['student_no'];
	$semester=$row['semester'];
	$name=$row['name'];
	$major1=$row['major1'];
	$major2=$row['major2'];

	echo "<tr><td>".$idx."</td><td>".$student_no."</td><td>".$semester."</td><td>".$name."</td><td>".$major1."</td><td>".$major2."</td><tr>";
}

echo "</table>";


mysqli_close($conn);

?>