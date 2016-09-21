<html>
    <head>
<title>
    this is the project GSC page
</title>
    </head>
    <link href="boots/css/bootstrap.min.css" rel="stylesheet">
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
<h1 align = "center">Project General Characteristic Systems </h1>

        <?php
// in this we are goin to have three operations 
//insert
//delete
//update
echo "this is the operation page";
include 'connectDB.php';
$connect = new connect;    //connection and selection of the database for php page
$con = $connect->startcon();
$connect->selectdb();
echo "<br>";
$pid = $_GET['sno'];
$ret = "SELECT * FROM `fpa`.`projectgsc` WHERE ProjectId = ".$pid."";
$ret1 = "SELECT COUNT(`ProjectGSCId`) AS `abc` FROM `projectgsc`";
$res1 = mysql_query($ret1,$con);//print_r ($res1);
$i = mysql_fetch_array($res1);

$result = mysql_query($ret,$con);
echo "the insertion should start from ProjectGSCId:-  ";
echo $i['abc']+1;
echo"<br/>";
//print_r($result);
?>

       <script>
            function subfrm(action)
            {
                document.getElementById('form1').action = action;
                document.getElementById('form1').submit();
            }
        </script>
        <form action = 'gscm.php' method = 'post' class = "form-inline" role = "form" id = 'form1'>
                
            <div class="form-group">
      <label class="sr-only" for="pid">Project ID</label>
      <input type="number" class="form-control" id ="pgscid" name = "ProjectGSCId" type = "number" placeholder = "ProjectGSCId">
   </div>
            <div class = "form-group">
                <label for = "title" class = "sr-only">Title </label>
                              
                <input class = "form-control" id = "pid" name ="ProjectId" type = 'number' placeholder ="ProjectId" >
            <br>
                    </div>
        <div class = "form-group">
                <label for = "description" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "gscid" name ="GSCId" type = 'number' placeholder ="GSCId" >
                    </div>
            <div class = "form-group">
                <label for = "description" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "gscv" name ="GSCValue" type = 'number' placeholder ="GSCValue" >
                    </div>
		
		<br>
                    
		<div class = "form-group">
			<div class ="col-sm-offset-2 col-sm-10">
				<br>
                                <button id = "btn1" class = "btn btn-success" onClick = "subfrm('gscm.php?btn1=1')" type = "submit"> insert</button> 
                <button id = "btn2" class = "btn btn-success" onClick = "subfrm('gscm.php?btn2=1')"> update</button> 
		<button id = "btn3" class = "btn btn-success" onClick = "subfrm('gscop.php')"> refresh</button>
                <button id = "btn4" class = "btn btn-success" onClick = "subfrm('gscm.php?btn4=1')"> remove </button> 
                        </div>
		</div>
		</form>
       
    <script>
        alert ("hello");
        function autoFill(a,b,c,d)
        {   alert (b);
            document.getElementById("pgscid").value = a;
            document.getElementById("pid").value = b;
            document.getElementById("gscid").value = c;
            document.getElementById("gscv").value = d;
        }
    </script>
    <?php
echo "<table class = 'table table-hover' border='1'><tr></tr><th>ProjectGSCId</th>"
."<th>ProjectId</th><th>GSCId</th><th>GSCValue</th>";

while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['ProjectGSCId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['ProjectId'].'\',\''.$row['GSCId'] .'\',\''.$row['GSCValue'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	$idgsc = $row['GSCId'];
        $sql1 = "SELECT Title FROM `gsc` WHERE GSCId  = ".$idgsc."";
        
        $result1 = mysql_query($sql1,$con);
        $res = mysql_fetch_array($result1);
        echo $res['Title'];
	echo "<td>" . $row['ProjectId']. "</td>";
	echo "<td>" . $res['Title'] . "</td>";
        echo "<td>" . $row['GSCValue'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
    	echo "</tr> ";
}
        echo '</table>';

    ?>
</body>
    </html>