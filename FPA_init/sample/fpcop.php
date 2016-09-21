<html>
    <head>
<title>
    This is the project Function Point Page
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
         <li ><a href="/sample/gscshow.php">GSC</a></li>
         <li><a href = "/sample/projectsh.php">All Projects</a></li>
         <li class = "active"><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = "/sample/login.html">Log-out</a></li>
      </ul>
   </div>
</nav>
<br>
<br>
<h1 align = "center">Project Functional Point Complexity </h1>

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

$ret1 = "SELECT COUNT(`ProjectFunctionId`) AS `abc` FROM `projectfunction`";
$res1 = mysql_query($ret1,$con);//print_r ($res1);
$i = mysql_fetch_array($res1);
echo "the insertion should start from ProjectFunctionId:-  ";
echo $i['abc']+1;
echo"<br/>";

$ret = "SELECT * FROM `fpa`.`projectfunction`  WHERE ProjectId=".$pid."";
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
        <form action ="fpcm.php" method = "post" class = "form-inline" role = "form" id = 'form1'>
                
            <div class="form-group">
      <label class="sr-only" for="paid">Project Function ID</label>
      <input class="form-control" id ="pfid" name = "ProjectFunctionId" type = "number" placeholder = "ProjectFunctionId">
   </div>
            <div class = "form-group">
                <label for = "pid" class = "sr-only">Project ID </label>
                              
                <input class = "form-control" id = "pid" name ="ProjectId" type = 'number' placeholder ="ProjectId" >
            <br>
                    </div>
        <div class = "form-group">
                <label for = "aid" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "fun" name ="Function" type = 'text' placeholder ="Function" >
                    </div>
		
                    <div class = "form-group">
                <label for = "av" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "ft" name ="FunctionType" type = 'text' placeholder ="FunctionType" >
                    </div>
                    <div class = "form-group">
                <label for = "av" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "det" name ="DET" type = 'number' placeholder ="DET" >
                    </div>
                          <div class = "form-group">
                <label for = "av" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "ret" name ="RET" type = 'number' placeholder ="RET" >
                
                    </div>
                          <div class = "form-group">
                <label for = "av" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "ftr" name ="FTR" type = 'number' placeholder ="FTR" >
                    </div>
                          
		<br>
		<div class = "form-group">
			<div class ="col-sm-offset-2 col-sm-10">
				<br>
                <button id = "btn1" class = "btn btn-success" onClick = "subfrm('fpcm.php?btn1=1')"> insert</button> 
                <button id = "btn2" class = "btn btn-success" onClick = "subfrm('fpcm.php?btn2=1')"> update</button> 
		<button id = "btn3" class = "btn btn-success" onClick = "subfrm('fpcop.php')"> refresh</button>
                <button id = "btn4" class = "btn btn-success" onClick = "subfrm('fpcm.php?btn4=1')"> remove </button> 
                 
<!--                        <button id = "btn5" class = "btn btn-success" type = "submit">this is aws</button>-->
                        </div>
		</div>
		</form>
        
            
	    
				
    <script>
        alert ("hello");
        function autoFill(a,b,c,d,e,f,g,h)
        {   alert (b);
            document.getElementById("pfid").value = a;
            document.getElementById("pid").value = b;
            document.getElementById("fun").value = c;
            document.getElementById("ft").value = d;
            document.getElementById("det").value = e;
            document.getElementById("ret").value = f;
            document.getElementById("ftr").value = g;
            document.getElementById("ufp").value = h;
            
        }
    </script>
    <?php
echo "<table class = 'table table-hover' border='1'><tr></tr><th>ProjectFuncitonId</th>"
."<th>ProjectId</th><th>Function</th><th>FunctionType</th><th>DET</th><th>RET</th><th>FTR</th><th>UFP</th>";
while($row = mysql_fetch_array($result)) {
	echo "<tr>";
        $sno = $row['ProjectFunctionId'];
        //echo '<td>'.$row['sno'].'</td>';
	echo '<td> <a href = "javascript:return false;" onClick ="autoFill('.$sno.',\''.$row['ProjectId'].'\',\''.$row['Function'] .'\',\''.$row['FunctionType'] .'\',\''.$row['DET'] .'\',\''.$row['RET'] .'\',\''.$row['FTR'] .'\',\''.$row['UFP'] .'\')" >'. $sno.'</a> </td>';
	//$code = $row['code'];
	
	echo "<td>" . $row['ProjectId'] . "</td>";
	echo "<td>" . $row['Function'] . "</td>";
        echo "<td>" . $row['FunctionType'] . "</td>";
        echo "<td>" . $row['DET'] . "</td>";
        echo "<td>" . $row['RET'] . "</td>";
        echo "<td>" . $row['FTR'] . "</td>";
        echo "<td>" . $row['UFP'] . "</td>";
	//echo "<td><a href = '/sample/formm.html'>Modify</a><td>";
	echo "</tr> ";
}
        echo '</table>';

    ?>
</body>
    </html>

