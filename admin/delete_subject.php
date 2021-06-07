<?php
include('dbcon.php');
if (isset($_POST['delete_subject'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM subject where subject_id='$id[$i]'");
}
header("location: subjects.php");
}
?>