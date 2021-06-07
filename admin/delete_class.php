<?php
include('dbcon.php');
if (isset($_POST['delete_class'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM class where class_id='$id[$i]'");
}
header("location: class.php");
}
?>