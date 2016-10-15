<?php
echo "the record you want to delete";
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
	//print_r('print line 12');
	$delid = $_POST['delid'];
	//print_r('print line 13');
	$sql = "DELETE FROM `now`.`projects` WHERE `projects`.`id` = $delid";
	//DELETE FROM `now`.`projects` WHERE `projects`.`id` = 1"
	$ret = mysql_query($sql,$con);
	print_r($ret);
	if (!$ret){
	print_r("is not deleted");
	die('Error: ' . mysql_error());
	}
	else {
	print_r("is deleted");
	
	}
	mysql_close($con);
	?>
