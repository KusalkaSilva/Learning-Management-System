<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysql_query("delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysql_error());
?>

