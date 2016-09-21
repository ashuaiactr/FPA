<?php
echo 'this is the login page ';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
$name = $_POST['uname'];
$password = $_POST['pword'];
print_r ($password.'<br>');
$ret = "SELECT * FROM `fpa`.`posts` WHERE `posts`.`name` = '$name'";

//$row['password']
$result = mysql_query($ret,$con);
print_r($result.'<br/>');
print_r(mysql_num_rows($result));
$r1 = mysql_fetch_array($result);
print_r($r1['password']);
if (mysql_num_rows($result) == 0)
{   echo "hello";
    header("Location:login.html");
    echo "again";
}
elseif ($r1['password'] == NULL)
{   echo "again such";
    header("Location:login.html");
}
elseif ($r1['password'] == $password)
{   echo "again";
    header("Location:projectf.html");
} 
//$r1 = $row['password'];
//print_r($r1);
else
{ 
	header('Location:login.html');
}
		?>

