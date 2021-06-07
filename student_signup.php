<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_id = $_POST['class_id'];

$query = mysql_query("select * from student where username='$username' and firstname='$firstname' and lastname='$lastname' and class_id = '$class_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['student_id'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update student set password = '$password', status = 'Registered' where student_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
echo 'false';
}
?>