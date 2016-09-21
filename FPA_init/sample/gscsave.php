<?php
echo 'this is the save page';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
$sno = $_POST['sno'];
$gsc = $_POST['gsc'];
$bd = $_POST['bd'];
//$sql = "INSERT INTO `now`.`posts`(`name`,`password`,`email`) VALUES('$name','$password','$email')";
$sql = "UPDATE `now`.`gsc` SET `sno` = '$sno',`gsc` = '$gsc',`bd` = '$bd' WHERE `gsc`.`sno` = '$sno'";
//print_r($sql.'<br/>');
$ret = mysql_query($sql,$con);
//echo $ret.'<br/>';
if (!$ret ){
	echo'message not sent'.mysql_error($ret);
	}
else {
	echo 'msg sent';
	}
        header ("Location: gscshow.php");
        exit;
	echo '<a href = "/sample/login.html"><button>go to the login page</button></a>';
	mysql_close($con);



?>