<?php
echo 'this is the changing page<br/>';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
echo '<br/>';

if (isset($_GET['btn1']))
{
    //fun1;
    $id = $_POST['ProjectId'];
$title = $_POST['Title'];
$desc = $_POST['Description'];
//echo $name;
$sql = "INSERT INTO `fpa`.`project` (`ProjectId`, `Title`, `Description`) VALUES ('$id','$title','$desc')";
$ret = mysql_query($sql,$con);
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
    $id = $_POST['ProjectId'];
$title = $_POST['Title'];
$desc = $_POST['Description'];
$sql = "UPDATE `fpa`.`project` SET `Title` = '$title',`Description` = '$desc' WHERE `project`.`ProjectId` = '$id'";
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
   $id = $_POST['ProjectId'];
$sql = "DELETE FROM `fpa`.`project` WHERE `project`.`ProjectId` = '$id'";
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
    }
    
    echo 'this is delete function';
}
//smysql_close($con);
header ('Location:/sample/projectsh.php');
//mysql_close($conne);
$connect->closecon();
?>