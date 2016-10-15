<html>
    <head>
        <title>All Projects [Cost Estimation]</title>
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
         <li class="active"><a href = "/sample/projectsh.php">All Projects</a></li>
         <li><a href = "/sample/fpcsh.php">FPC</a></li>
         <li><a href = "/sample/login.html">Log-out</a></li>
      </ul>
   </div>
</nav>
        
        <br>
        <br>
        <h1 align = "center">ALL PROJECTS</h1>
        
<?php
//echo 'this is the project page where the things are shown';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
//$id = $_POST['id'];
$ret = "SELECT * FROM `fpa`.`project` ";
//print_r ($ret);
$result = mysql_query($ret,$con);
//print_r($ret);
//session_start();
?>
        <script>
            function subfrm(action)
            {
                document.getElementById('form1').action = action;
                document.getElementById('form1').submit();
            }
        </script>
        <form action = 'testing.php' method = 'post' class = "form-inline" role = "form" id = 'form1'>
                
            <div class="form-group">
      <label class="sr-only" for="pid">Project ID</label>
      <input type="text" class="form-control" id ="ProjectId" name = "ProjectId" type = "number" placeholder = "ProjectId">
   </div>
            <div class = "form-group">
                <label for = "title" class = "sr-only">Title </label>
                              
                <input class = "form-control" id = "Title" name ="Title" type = 'text' placeholder ="Title" >
            <br>
                    </div>
        <div class = "form-group">
                <label for = "description" class = "sr-only">Description </label>
                             
                <input class = "form-control" id = "Description" name ="Description" type = 'text' placeholder ="Description" >
                    </div>
		<br>
                    
		<div class = "form-group">
			<div class ="col-sm-offset-2 col-sm-10">
				<br>
                                <button id = "btn1" class = "btn btn-success" onClick = "subfrm('projectm.php?btn1=1')" type='submit'> insert</button> 
                <button id = "btn2" class = "btn btn-success" onClick = "subfrm('projectm.php?btn2=1')"> update</button> 
		<button id = "btn3" class = "btn btn-success" onClick = "subfrm('projectsh.php')"> refresh</button>
                <button id = "btn4" class = "btn btn-success" onClick = "subfrm('projectm.php?btn4=1')"> remove </button> 
                        </div>
		</div>
		</form>
         <script type = "text/javascript">
            
				alert ("This is the Project Page");    
				function autoFill(a,b,c)
				{
                                    //alert(b);
                                   // bl = json_decode(b)
                                   
					document.getElementById("ProjectId").value = a;
					document.getElementById("Title").value = b;
                                        document.getElementById("Description").value = c;
				}
                                    </script>
                                <br>
        <?php
        
echo "<table class = 'table table-hover' border='1'><tr></tr><th>ID</th><th>TITLE</th><th>DESCRIPTION</th><th>Values of complexities</th></tr>";

while($row = mysql_fetch_array($result)) {
	echo "<tr>";
	//echo "<td><a href = "">" . $row['ProjectId'] . "</td>";
	echo '<td><a href = "javascript:return false;" onClick="autoFill('.$row['ProjectId'].',\''.$row['Title'].'\',\''. $row['Description'].'\');">'.$row['ProjectId'].'</a> </td>';
        ////$id = $row['id'];
	//$_GET['id'] = $id;
	echo "<td>" . $row['Title'] . "</td>";
	echo "<td>" . $row['Description'] . "</td>";
	echo '<td><div class = "dropdown"><button type= "button"  class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">';
	echo ' Add/Edit <span class="caret"></span></button>';
        echo '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">';
        echo '<li role="presentation">';
        echo '<a role="menuitem" tabindex="-1" href="gscop.php?sno='.$row['ProjectId'].'">Project GSC</a></li>
        <li role="presentation">
        <a role="menuitem" tabindex="-1" href="fpcop.php?sno='.$row['ProjectId'].'">Project Function</a>
        </li>
        <li role="presentation">
         <a role="menuitem" tabindex="-1" href="assumop.php?sno='.$row['ProjectId'].'">
            Project Assumption
         </a>
        </li>
        <li role="presentation">
         <a role="menuitem" tabindex="-1" href="infopg.php?sno='.$row['ProjectId'].'">
        Print Report 
        </a>
        </li>
        
        </ul>
        </div>
        </td>';
        echo "</tr>";
	//echo $row['title'] . " " . $row['desc'];
	//$r1 = $row['title'];
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

//echo  '<a href = "/sample/projectf.html"><button>Project Form </button></a>';
mysql_close ($con);
?>
        <script src="https://code.jquery.com/jquery.js"></script>
                <script src="boots/js/bootstrap.min.js"></script>
    </body>
    </html>