<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "medical_diagnosis";
$port = 4306;
$con = mysqli_connect($host,$user,$password,$db, $port);
if($con)
{
    echo "connected";
}else
{echo "not connected";}
?>