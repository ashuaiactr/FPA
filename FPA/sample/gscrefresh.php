<?php
echo 'this is the echo page';
include 'connectDB.php';
$connect = new connect;
$con = $connect->startcon();
$connect->selectdb();
   $sno = $_GET['sno'];
    echo "<form action = 'gscsave.php' method = 'post'>";
    echo "<label class = 'snol'>sno</label>";
    echo "<input class = 'sno' name = 'sno' type = 'text' value = ".$sno."><br/>";
    echo "<label class = 'gscl'>General System Characteristics</label>";
    echo "<input class = 'gsc' name = 'gsc' type = 'text' ></br>";
    echo "<label class = 'bdl'>Brief Description</label>";
    echo "<input class = 'bd' name = 'bd' type = 'text'><br/>";
    echo "<input class = 'save' type = 'submit' value = 'save'>";
    echo "</form>";
    //echo "<a href = '/sample/a1refresh.php'><button> Assumption Table  </button></a>";
    echo '<a href = "/sample/a1refresh.php?code='. $code.'"><button> Refresh </button></a>';
    echo "<a href = '/sample/a1show.php'><button> Assumption Table  </button></a>";

?>
