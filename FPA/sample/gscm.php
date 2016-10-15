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
   
$pgscid = $_POST['ProjectGSCId'];
$pid = $_POST['ProjectId'];
$gscid = $_POST['GSCId'];
$gscv = $_POST['GSCValue'];
echo $pid;
$sql = "INSERT INTO `fpa`.`projectgsc`(`ProjectGSCId`, `ProjectId`,`GSCId`,`GSCValue`) VALUES ('$pgscid','$pid','$gscid','$gscv')";
echo $sql.'<br>';
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo 'message not sent';
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
$pgscid = $_POST['ProjectGSCId'];
$pid = $_POST['ProjectId'];
$gscid = $_POST['GSCId'];
$gscv = $_POST['GSCValue'];
$sql = "UPDATE `fpa`.`projectgsc` SET `GSCId` = '$gscid', `GSCValue` = $gscv WHERE `projectgsc`.`ProjectGSCId` = '$pgscid' AND `ProjectId` = '$pid'";
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
   $pgscid = $_POST['ProjectGSCId'];
   $pid = $_POST['ProjectId'];
$sql = "DELETE FROM `fpa`.`projectgsc` WHERE `projectgsc`.`ProjectGSCId` = '$pgscid' AND `ProjectId` = '$pid'";
echo $sql;
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
    }
    
    echo 'this is delete function';
}
$pid = $_POST['ProjectId'];
//echo $pid;
$sql = "SELECT SUM(GSCValue) FROM `projectgsc` WHERE ProjectId = ".$pid."";
echo $sql;
$ret1 = mysql_query($sql,$con);
echo $ret1."<br>";
$row = mysql_fetch_array($ret1);


$vaf = 0.65 + (0.01*$row['SUM(GSCValue)']);
  $sql1 =  "SELECT UFP FROM `projectfunction` WHERE ProjectId = ".$pid."";
  $ret2  = mysql_query($sql1,$con);
  $row1 = mysql_fetch_array($ret2);
  $ufp = $row1['UFP'];
  $fp = $ufp * $vaf;
    echo $fp;
$sql2 = "UPDATE `fpa`.`project` SET `FunctionPoints` =". $fp." WHERE `project`.`ProjectId` = ".$pid."";
$ret3 = mysql_query($sql2,$con);
header("Location:/sample/gscop.php?sno=".$pid."");
mysql_close($con);
?>
