<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysql_error());
mysql_query("delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysql_error());
?>

