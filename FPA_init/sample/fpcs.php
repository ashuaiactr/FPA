<?php
echo 'this is the register page';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
//$ = $_POST['gsc'];
$type = $_POST['type'];
$low = $_POST['low'];
$avg = $_POST['avg'];
$high = $_POST['high'];
//$tbuforapp = $_POST['tbuforapp'];
$sql = "INSERT INTO `now`.`fpc`(`type`,`low`,`avg`,`high`) VALUES ('$type','$low','$avg','$high')";
$ret = mysql_query($sql,$con);
print_r($ret);
if (!$ret ){
	echo 'message not sent';
	}
else {
	echo 'msg sent';
	}
	echo '<a href = "/sample/fpc.html"><button>go to the gsc page</button></a>';
	mysql_close($con);

?>

