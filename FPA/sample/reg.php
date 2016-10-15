<?php
//echo '<h1 align = "center">this is the register page</h1>';
//$con = mysql_connect('localhost:8080','root','ashu123','now');
//if (!$con)
//{
//	print_r('could not connect');
//	}
//	else{
//		echo 'connected';
//		}
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();

$connect->selectdb();

//mysql_select_db('now');
$name = $_POST['uname'];
$password = $_POST['pword'];
$email = $_POST['email'];
$sql = "INSERT INTO ``.`posts`(`name`,`password`,`email`) VALUES('$name','$password','$email')";
$ret = mysql_query($sql,$connect->myconn);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
	}
	echo '<a href = "/sample/login.html"><button>go to the login page</button></a>';
	//mysql_close($con);
        header( 'Location: /sample/formr.html');
        $connect->closecon();
?>
