<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department_id = $_POST['department_id'];

$query = mysql_query("select * from teacher where  firstname='$firstname' and lastname='$lastname' and department_id = '$department_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['teacher_id'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update teacher set username='$username',password = '$password', teacher_status = 'Registered' where teacher_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>