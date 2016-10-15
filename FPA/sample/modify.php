<?php
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
session_start();
$id = $_POST['id'];
//$id = $_POST['id'];
$ret = "SELECT * FROM `now`.`projects` WHERE `projects`.`id` = '$id' ";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($ret);
while($row = mysql_fetch_array($result)) {
	echo $row['title'] . " " . $row['desc'];
	$r1 = $row['title'];
	$r2 = $row['desc'];
//	echo 
	echo "<br>";
 	echo "<input name = 'pt' type = 'text' value = '$r1'  >";
	echo "<br>";
	echo "<input name = 'pd' type = 'text' value = '$r2'>";
	echo "<br>";
}
$pt = $_POST['pt'];
$pt = $_POST['pd'];
$x = "INSERT INTO `now`.`project`(`title`,`desc`) VALUES ('$pt','$pd')";

mysql_close($con);
//echo "<input name = 'pt' type = 'text' value = $row['title'] >";
//echo "<input name = 'pd' type = 'text' value = $row['desc']>"

echo  "<a href = '/sample/formp.html'><button>go to the project form </button></a>";
mysql_close ($con);
?>
