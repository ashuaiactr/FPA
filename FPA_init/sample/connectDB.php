<?php
class connect 
{
    var $server = 'localhost:8080';
    var $username = 'root';
    var $password = 'ashu123';
    var $database = 'fpa';
    var $myconn;
    function startcon()
    {
        $con  = mysql_connect($this->server, $this->username, $this->password);
        if ($con)
        {
            
            $this->myconn = $con;
        }
        else 
        {
            //echo 'not connected <br>';
            
        }
        return $con;
    }
     function selectdb()
     {
         $db = mysql_select_db($this->database);
         if ($db)
         {
             //echo'connected to database<br/>';
         }
         
     }
     function closecon()
     {
         mysql_close($this->myconn);
     }
     
}
class insert 
{
    function into()
    {
        
    }
}
?>