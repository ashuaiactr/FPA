<html>
    <head>
        <title> Assumption Table </title>
        <link href="boots/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">Cost_Estimation</a>
   </div>
   <div>
      <ul class="nav navbar-nav">
          <li class="active"><a href="/sample/assumsh.php">Assumption</a></li>
         <li><a href="/sample/gscshow.php">GSC</a></li>
         <li><a href = "/sample/projectsh.php">All Projects</a></li>
         <li><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = "/sample/login.html">Log-out</a></li>
      </ul>
   </div>
</nav>
<br>
<br>
<br>
            <h1 align = "center">Default Assumption Table</h1>
            <?php
             include 'connectDB.php';
            $connect = new connect;
                $con = $connect->startcon();
            $connect->selectdb();
            $ret = "SELECT * FROM `fpa`.`assumption`  WHERE 1";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($result);

?>
            <br>
            <br>
            
<!--<form>
    <label class = "aid">Serial No.</label>
    <input id = "aid" type = "text" >
    <label class = "code">Code</label>
    <input id = "code" type = "text" >
    <label class = "bd">Brief Description</label>
    <input id = "bd" type = "text" >
    <label class = "mu">Measurement Unit</label>
    <input id = "mu" type = "text" >
    <label class = "formula">Formula</label>
    <input id = "formula" type = "text" >
    <label class = "dv">Default Value</label>
    <input id = "dv" type = "text" >
    <input class = "in1" type = "submit" value = "Submit">
    <a href = "test/gscshow.php">reset</a>
    <a href = "#" onClick = "<?php fun();?>;">fun </a>
</form>-->
    <script>
        alert ("hello");
        function autoFill(a,b,c,d,e,f)
        {   alert (b);
            document.getElementById("aid").value = a;
            document.getElementById("code").value = b;
            document.getElementById("bd").value = c;
            document.getElementById("mu").value = d;
            document.getElementById("formula").value = e;
            document.getElementById("dv").value = f;
        }
    </script>
<?php
echo "<table class = 'table table-hover' border='1'><tr></tr><th>AssumptionID</th>"
."<th>Code</th><th> Description</th><th>Measurement Unit</th><th>Formula</th><th>Default Value</th>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['AssumptionId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['Code'].'\',\''.$row['Description'] .'\',\''.$row['MeasurementUnit'] .'\',\''.$row['Formula'] .'\',\''.$row['DefaultValue'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	
	echo "<td>" . $row['Code'] . "</td>";
	echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['MeasurementUnit'] . "</td>";
        echo "<td>" . $row['Formula'] . "</td>";
        echo "<td>" . $row['DefaultValue'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
	echo "</tr> ";
	  
}
echo "</table>";
//$pt = $_POST['pt'];
//$pt = $_POST['pd'];
//$x = "INSERT INTO `now`.`project`(`title`,`desc`) VALUES ('$pt','$pd')";


//echo "<input name = 'pt' type = 'text' value = $row['title'] >";
//echo "<input name = 'pd' type = 'text' value = $row['desc']>"

//echo  '<a href = "/sample/gsc.html"><button>go to the GSC form </button></a>';
function fun ()
{
    echo "this is it";
}
mysql_close ($con);
?>
</body>
</html>

 
