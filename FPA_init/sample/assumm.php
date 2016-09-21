<?php

include ('connectDB.php');
//$obj  = new page;
//echo $obj->prop;
$connect = new connect;
echo'<br/>';    
$con = $connect->startcon();
echo '<br/>';
$connect->selectdb();
echo '<br/>';

if (isset($_GET['btn1']))
{
    
$paid = $_POST['ProjectAssumptionId'];
$pid = $_POST['ProjectId'];
$aid = $_POST['AssumptionId'];
$av = $_POST['AssumptionValue'];

$sql = "INSERT INTO `projectassumption`(`ProjectAssumptionId`,`ProjectId`,`AssumptionId`,`AssumptionValue`) VALUES('$paid','$pid','$aid','$av')";
$ret = mysql_query($sql,$con);
echo $ret;
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
	}
	//echo '<a href = "/sample/login.html"><button>go to the login page</button></a>';
	//mysql_close($con);

    echo "this is function1 of button1";
}
if (isset($_GET['btn2']))
{
$paid = $_POST['ProjectAssumptionId'];
$pid = $_POST['ProjectId'];
$aid = $_POST['AssumptionId'];
$av = $_POST['AssumptionValue'];
$sql = "UPDATE `fpa`.`projectassumption` SET `AssumptionId` = '$aid', `AssumptionValue` ='$av' WHERE `ProjectAssumptionId` = '$paid'";
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
	}
    echo "this is function2 of button2";     
	//echo '<a href = "/sample/login.html"><button>go to the login page</button></a>';
	//mysql_close($con);
}	
if (isset($_GET['btn4']))
{
   $paid = $_POST['ProjectAssumptionId'];
   $pid = $_POST['ProjectId'];
$sql = "DELETE FROM `fpa`.`projectassumption` WHERE `projectassumption`.`ProjectAssumptionId` = '$paid' AND `ProjectId` = '$pid'";
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
    }
    
    echo 'this is delete function';
}
header ('Location:/sample/assumop.php?sno='.$pid.'');
mysql_close($con);
?>
