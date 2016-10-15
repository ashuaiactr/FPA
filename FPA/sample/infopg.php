<html>
    <head>
        <title>
            This is the Project Report
        </title>
    </head>
    <link href="boots/css/bootstrap.min.css" rel="stylesheet">
    <body>
        <h1 align = "center">Project Report</h1>
        
<?php
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
//$sno = $_POST['sno'];
$pid = $_GET['sno'];
//echo $sno;
$sql = "SELECT SUM(GSCValue) FROM `projectgsc` WHERE ProjectId = ".$pid."";
//echo $sql;
$ret1 = mysql_query($sql,$con);
//echo $ret1."<br>";
$row = mysql_fetch_array($ret1);


$vaf = 0.65 + (0.01*$row['SUM(GSCValue)']);
  $sql1 =  "SELECT UFP FROM `projectfunction` WHERE ProjectId = ".$pid."";
  $ret2  = mysql_query($sql1,$con);
  $row1 = mysql_fetch_array($ret2);
  $ufp = $row1['UFP'];
  $fp = $ufp * $vaf;
   // echo $fp;
$sql2 = "UPDATE `fpa`.`project` SET `FunctionPoints` =". $fp." WHERE `project`.`ProjectId` = ".$pid."";
$ret3 = mysql_query($sql2,$con);

$ret = "SELECT * FROM `fpa`.`project`  WHERE ProjectId = '$pid'";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($result);
echo '<br>';
    $row = mysql_fetch_array($result);
    echo '<div class="page-header" style = " margin-left: 100px ">
   <h2>Project Report of '.$row['Title'].'
      <small>Functional Point Analysis</small>
   </h1>
</div>
<p style = "margin-left: 100px; font-size: 20px;">
   Project Id :'.$row['ProjectId'].'<br> 
   Description of the project  : '.$row['Description'].'<br>
   Functional Point: '.$row['FunctionPoints'].'</p>';  
?>
    </body>
</html>