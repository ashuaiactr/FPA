<html>
    <head>
<title>
    this is the project Assumption page
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
         <li class = "active"><a href="/sample/assumsh.php">Assumption</a></li>
         <li ><a href="/sample/gscshow.php">GSC</a></li>
         <li><a href = "/sample/projectsh.php">All Projects</a></li>
         <li><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = "/sample/login.html">Log-out</a></li>
      </ul>
   </div>
</nav>
<br>
<br>
<h1 align = "center">Project Assumption </h1>

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
$ret1 = "SELECT COUNT(`ProjectAssumptionId`) AS `abc` FROM `projectassumption`";
$res1 = mysql_query($ret1,$con);//print_r ($res1);
$i = mysql_fetch_array($res1);
echo "the insertion should start from ProjectAssumptionId:-  ";
echo $i['abc']+1;
echo"<br/>";

$ret = "SELECT * FROM `fpa`.`projectassumption`  WHERE ProjectID =".$pid."";
//print_r ($ret);
$result = mysql_query($ret,$con);
print_r($result);
?>
<script>
            function subfrm(action)
            {
                document.getElementById('form1').action = action;
                document.getElementById('form1').submit();
            }
        </script>
        <form action = 'assumm.php' method = 'post' class = "form-inline" role = "form" id = 'form1'>
                
            <div class="form-group">
      <label class="sr-only" for="paid">Project ID</label>
      <input type="number" class="form-control" id ="paid" name = "ProjectAssumptionId" type = "number" placeholder = "ProjectAssumptionId">
   </div>
            <div class = "form-group">
                <label for = "pid" class = "sr-only">Project ID </label>
                              
                <input class = "form-control" id = "pid" name ="ProjectId" type = 'number' placeholder ="ProjectId" >
            <br>
                    </div>
        <div class = "form-group">
                <label for = "aid" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "aid" name ="AssumptionId" type = 'number' placeholder ="AssumptionId" >
                    </div>
		
                    <div class = "form-group">
                <label for = "av" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "av" name ="AssumptionValue" type = 'number' placeholder ="AssumptionValue" >
                    </div>
		<br>
		<div class = "form-group">
			<div class ="col-sm-offset-2 col-sm-10">
				<br>
                <button id = "btn1" class = "btn btn-success" onClick = "subfrm('assumm.php?btn1=1')" > insert</button> 
                <button id = "btn2" class = "btn btn-success" onClick = "subfrm('assumm.php?btn2=1')"> update</button> 
		<button id = "btn3" class = "btn btn-success" onClick = "subfrm('assumop.php')"> refresh</button>
                <button id = "btn4" class = "btn btn-success" onClick = "subfrm('assumm.php?btn4=1')"> remove </button> 
                        </div>
		</div>
		</form>
        
            
	    
				
    <script>
        alert ("hello");
        function autoFill(a,b,c,d)
        {   alert (b);
            document.getElementById("paid").value = a;
            document.getElementById("pid").value = b;
            document.getElementById("aid").value = c;
            document.getElementById("av").value = d;
        }
    </script>
    <?php
echo "<table class = 'table table-hover' border='1'><tr></tr><th>ProjectAssumptionId</th>"
."<th>ProjectId</th><th>AssumptionId</th><th>AssumptionValue</th>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['ProjectAssumptionId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['ProjectId'].'\',\''.$row['AssumptionId'] .'\',\''.$row['AssumptionValue'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	
	echo "<td>" . $row['ProjectId'] . "</td>";
	echo "<td>" . $row['AssumptionId'] . "</td>";
        echo "<td>" . $row['AssumptionValue'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
	echo "</tr> ";
}
        echo '</table>';

    ?>
</body>
    </html>
