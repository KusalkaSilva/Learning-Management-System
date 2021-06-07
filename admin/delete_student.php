<?php
include('dbcon.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysql_query("DELETE FROM student where student_id='$id[$i]'");
	 mysql_query("DELETE FROM teacher_class_student where student_id='$id[$i]'");
}
header("location: students.php");
}
?>