<?php
include('admin/dbcon.php');
$get_id = $_POST['id'];
mysql_query("delete from teacher_class  where  teacher_class_id = '$get_id' ")or die(mysql_error());
mysql_query("delete from teacher_class_student  where  teacher_class_id = '$get_id' ")or die(mysql_error());
mysql_query("delete from teacher_class_announcements  where  teacher_class_id = '$get_id' ")or die(mysql_error());
mysql_query("delete from teacher_notification  where  teacher_class_id = '$get_id' ")or die(mysql_error());
mysql_query("delete from class_subject_overview where  teacher_class_id = '$get_id' ")or die(mysql_error());
header('location:dasboard_teacher.php');
?>