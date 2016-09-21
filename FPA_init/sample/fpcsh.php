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
          <li ><a href="/sample/assumsh.php">Assumption</a></li>
         <li><a href="/sample/gscshow.php">GSC</a></li>
         <li><a href = "/sample/projectsh.php">All Projects</a></li>
         <li class="active"><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = '/sample/login.html'>Log-out</a></li>
      </ul>
   </div>
</nav>
<br>
<br>
<br>
            <h1 align = "center">Default Functional Point Complexity Table</h1>
            <?php
             include 'connectDB.php';
            $connect = new connect;
                $con = $connect->startcon();
            $connect->selectdb();
            $ret = "SELECT * FROM `fpa`.`functioncomplexity`  WHERE 1";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($result);
echo '<br><br>';
?>
    <script>
        alert ("This is the Assumption Page");
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
echo "<table class = 'table table-hover' border='1'><tr></tr><th>FunctionComplexityID</th>"
."<th>FunctionType</th><th>Complexity</th><th>Complexity Value</th><th>DETLowerLimit</th><th>DETUpperLimit</th><th>RETLowerLimit</th><th>RETUpperLimit</th><th>FTRLowerLimit</th><th>FTRUpperLimit</th>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['FunctionComplexityId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['Code'].'\',\''.$row['Description'] .'\',\''.$row['MeasurementUnit'] .'\',\''.$row['Formula'] .'\',\''.$row['DefaultValue'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	
	echo "<td>" . $row['FunctionType'] . "</td>";
	echo "<td>" . $row['Complexity'] . "</td>";
        echo "<td>" . $row['ComplexityValue'] . "</td>";
        echo "<td>" . $row['DETLowerLimit'] . "</td>";
        echo "<td>" . $row['DETUpperLimit'] . "</td>";
        echo "<td>" . $row['RETLowerLimit'] . "</td>";
        echo "<td>" . $row['RETUpperLimit'] . "</td>";
        echo "<td>" . $row['FTRLowerLimit'] . "</td>";
        echo "<td>" . $row['FTRUpperLimit'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
	echo "</tr> ";
	  
}
echo "</table>";

function fun ()
{
    echo "this is it";
}
mysql_close ($con);
?>
</body>
</html>

 

