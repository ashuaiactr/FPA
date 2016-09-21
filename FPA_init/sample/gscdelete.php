<?php
echo 'this is the echo page<br/>';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
   $sno = $_GET['sno'];
   //$code = $_GET['code'];
   echo $code;
   $sql = "DELETE FROM `now`.`gsc` WHERE `gsc`.`sno` = '$sno'";
   $ret = mysql_query($sql,$con);
   print_r($ret);
   if(!$ret)
   {
       echo 'it is not deleted ';
   }
   else {
       echo 'it is deleted';
   }
   header ("location: gscshow.php");
   mysql_close($con);
?>