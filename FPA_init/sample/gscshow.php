<html>
            <head><title>
        General Characteristic System
        </title>
            <link href="boots/css/bootstrap.min.css" rel="stylesheet">
            </head>
<body>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">Cost_Estimation</a>
   </div>
   <div>
      <ul class="nav navbar-nav">
         <li ><a href="/sample/assumsh.php">Assumption</a></li>
         <li class="active"><a href="/sample/gscshow.php">GSC</a></li>
         <li><a href = "/sample/projectsh.php">All Projects</a></li>
         <li><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = "/sample/login.html">Log-out</a></li>
      </ul>
   </div>
</nav>
      <br>
      <br>
<h1 align = "center">General System Characteristics </h1>
<?php
echo '<br>';
//$con  = mysql_connect('localhost:8080','root','ashu123','now');
//if (!$con)
//{
//print_r('could not connect');
//}
//else {
//print_r ('connected');
//}
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
echo "<br>";
//mysql_select_db('now');
//$id = $_POST['id'];
$ret = "SELECT * FROM `fpa`.`gsc`  WHERE 1";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($result);
?>
<!--<form >
    <label class = "snoc">Serial No.</label>
    <input id = "sno" type = "text" >
    <label class = "gscc">General Characteristics Systems</label>
    <input id = "gsc" type = "text" >
    <label class = "bdc">Brief Description</label>
    <input id = "bd" type = "text" >
    <input class = "in1" type = "submit" value = "Submit">
    <a href = "test/gscshow.php">reset</a>
    <a href = "#" onClick = "<?php fun();?>;">fun </a>
</form>-->
    <script>
        alert ("Default GSC Value");
        function autoFill(a,b,c)
        {   alert (b);
            document.getElementById("sno").value = a;
            document.getElementById("gsc").value = b;
            document.getElementById("bd").value = c;
        }
    </script>
<?php
echo "<table class = 'table table-hover' border='1'><tr></tr><th>SNO</th>"
."<th>General System Characteristics</th><th>Brief Description</th>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['GSCId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['Title'].'\',\''.$row['Description'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	
	echo "<td>" . $row['Title'] . "</td>";
	echo "<td>" . $row['Description'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
	echo "</tr> ";
	//echo $row['title'] . " " . $row['desc'];
	//$r1 = $row['ti    tle'];
	//$r2 = $row['desc'];
//	echo 
	//echo "<br>";
 	//echo "<input name = 'pt' type = 'text' value = '$r1'  >";
	//echo "<br>";
	//echo "<input name = 'pd' type = 'text' value = '$r2'>";
	//echo "<br>";  
}
echo "</table>";
//$pt = $_POST['pt'];
//$pt = $_POST['pd'];
//$x = "INSERT INTO `now`.`project`(`title`,`desc`) VALUES ('$pt','$pd')";


//echo "<input name = 'pt' type = 'text' value = $row['title'] >";
//echo "<input name = 'pd' type = 'text' value = $row['desc']>"

echo  '<a href = "/sample/gsc.html"><button>go to the GSC form </button></a>';
function fun ()
{
    echo "this is it";
}
mysql_close ($con);
?>
</body>
</html>