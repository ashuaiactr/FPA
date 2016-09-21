<?php
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();

$connect->selectdb();

//mysql_select_db('now');
$id = $_POST['pid'];
$title = $_POST['ptitle'];
$desc = $_POST['pdesc'];
$sql = "INSERT INTO `fpa`.`project`(`ProjectId`,`Title`,`Description`) VALUES('$id','$title','$desc')";
$ret = mysql_query($sql,$connect->myconn);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
	}
	//echo '<a href = "/sample/login.html"><button>go to the login page</button></a>';
	//mysql_close($con);
        header( 'Location: /sample/projectsh.php');
        $connect->closecon();
?>