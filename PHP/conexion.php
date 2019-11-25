<?php
$mysqli = new mysqli("localhost","root","","giras_proyecto");
if($mysqli->connect_errno){
    echo"fallo al conectar a MySQL:(".$mysqli->connect_errno. ")".$mysqli->connect_error;
}
?>
