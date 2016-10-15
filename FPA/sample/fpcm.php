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
echo "hello page";
//$pid = $_GET['pid'];
//echo $pid;
if (isset($_GET['btn1']))
{
    
    $pfid = $_POST['ProjectFunctionId'];
$pid = $_POST['ProjectId'];
$fun = $_POST['Function'];
$ft = $_POST['FunctionType'];
$det = $_POST['DET'];
$ret = $_POST['RET'];
$ftr = $_POST['FTR'];
//$ufp = $_POST['UFP'];
//echo $name;

$sql1 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EI' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql2 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EO' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql3 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EQ' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql4 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'ILF' AND RETLowerLimit <= ".$ret." AND RETUpperLimit >= ".$ret."";
$sql5 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EIF' AND RETLowerLimit <= ".$ret." AND RETUpperLimit >= ".$ret."";
//echo $sql5."<br>";
$ret1 = mysql_query($sql1,$con);
$ret2 = mysql_query($sql2,$con);
$ret3 = mysql_query($sql3,$con);
$ret4 = mysql_query($sql4,$con);
$ret5 = mysql_query($sql5,$con);
$row1 = mysql_fetch_array($ret1);
$row2 = mysql_fetch_array($ret2);
$row3 = mysql_fetch_array($ret3);
$row4 = mysql_fetch_array($ret4);
$row5 = mysql_fetch_array($ret5);
$ufp = $row1['ComplexityValue'] + $row2['ComplexityValue'] + $row3['ComplexityValue'] + $row4['ComplexityValue'] + $row5['ComplexityValue'] ;
$sql = "INSERT INTO `projectfunction`(`ProjectFunctionId`,`ProjectId`,`Function`,`FunctionType`,`DET`,`RET`,`FTR`,`UFP`) VALUES('$pfid','$pid','$fun','$ft','$det','$ret','$ftr','$ufp')";
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
$pfid = $_POST['ProjectFunctionId'];
$pid = $_POST['ProjectId'];
$fun = $_POST['Function'];
$ft = $_POST['FunctionType'];
$det = $_POST['DET'];
$ret = $_POST['RET'];
$ftr = $_POST['FTR'];
//$ufp = $_POST['UFP'];
$sql1 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EI' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql2 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EO' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql3 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EQ' AND FTRLowerLimit <= ".$ftr." AND FTRUpperLimit >= ".$ftr."";
$sql4 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'ILF' AND RETLowerLimit <= ".$ret." AND RETUpperLimit >= ".$ret."";
$sql5 = "SELECT ComplexityValue FROM `functioncomplexity` WHERE DETLowerLimit <= ".$det." AND DETUpperLimit >= ".$det." AND FunctionType = 'EIF' AND RETLowerLimit <= ".$ret." AND RETUpperLimit >= ".$ret."";
//echo $sql5."<br>";
$ret1 = mysql_query($sql1,$con);
$ret2 = mysql_query($sql2,$con);
$ret3 = mysql_query($sql3,$con);
$ret4 = mysql_query($sql4,$con);
$ret5 = mysql_query($sql5,$con);
$row1 = mysql_fetch_array($ret1);
$row2 = mysql_fetch_array($ret2);
$row3 = mysql_fetch_array($ret3);
$row4 = mysql_fetch_array($ret4);
$row5 = mysql_fetch_array($ret5);
$ufp = $row1['ComplexityValue'] + $row2['ComplexityValue'] + $row3['ComplexityValue'] + $row4['ComplexityValue'] + $row5['ComplexityValue'] ;

$sql = "UPDATE `fpa`.`projectfunction` SET `Function` = '$fun', `FunctionType` = '$ft',`DET` ='$det',`RET` ='$ret',`FTR` ='$ftr',`UFP` ='$ufp'  WHERE `projectfunction`.`ProjectFunctionId` = '$pfid'";
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
   $pid = $_POST['ProjectId'];
   $pfid = $_POST['ProjectFunctionId'];
$sql = "DELETE FROM `fpa`.`projectfunction` WHERE `projectfunction`.`ProjectId` = '$pid' AND `ProjectFunctionId` = '$pfid'";
$ret = mysql_query($sql,$con);
if (!$ret ){
	echo'message not sent';
	}
else {
	echo 'msg sent';
    }
    
    echo 'this is delete function';
}
echo $pid;
header("Location:/sample/fpcop.php?sno=".$pid."");
mysql_close($con);
?>
