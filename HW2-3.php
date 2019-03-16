<?php

$db_host="localhost";
$db_user="root";
$db_passwd="123456";
$db_name="csee_student";
 $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if(mysqli_connect_error($conn)){
	echo "Database connction failed: ".mysqli_connect_error();
} else { /*echo "Database connected."; */ } 

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21100000','8','김','CS')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1,major2) VALUES 
	('21200000','7','신','CS','Management')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21300001','4','박','CS')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21400002','4','송','CS')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21500005','4','공','CS')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21600035','6','차','Bio')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21700001','5','소','Bio')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21800011','4','한','Act')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21300999','3','박','Management')";
$result=mysqli_query($conn,$qry);

$qry="INSERT INTO csee_student(student_no,semester,name,major1) VALUES 
	('21500132','2','김','Management')";
$result=mysqli_query($conn,$qry);


$result= mysqli_query($conn,"SELECT * FROM csee_student");


echo "<table border ='1'>";
echo "<tr><th>idx</th><th>student_no</th><th>semester</th><th>
	name</th><th>major1</th><th>major2</th></tr>";

while($row= mysqli_fetch_array($result)){


	$idx=$row['idx'];
	$student_no=$row['student_no'];
	$semester=$row['semester'];
	$name=$row['name'];
	$major1=$row['major1'];
	$major2=$row['major2'];


	echo "<tr><td>".$idx."</td><td>".$student_no."</td><td>".
		$semester."</td><td>".$name."</td><td>".$major1."</td><td>".$major2."</td></tr>";

} echo "</table>";


$del=mysqli_query($conn,"DELETE FROM csee_student WHERE student_no ='21500132'");
$del=mysqli_query($conn,"DELETE FROM csee_student WHERE student_no ='21300999'");

$qry=mysqli_query($conn,"SELECT * FROM csee_student");


while($row=mysqli_fetch_array($qry)){
	echo $row['idx'];
	echo "  ".$row['student_no'];
	echo "  ".$row['semester'];
	echo $row['name'];
	echo $row['major1'];
	echo "  ".$row['major2'];
	echo "<br>";
}

mysqli_close($conn);
?>