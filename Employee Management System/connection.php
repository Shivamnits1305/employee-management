<?php

error_reporting(0);

$server = "localhost";
$username   = "root";
$password   = "";
$dbname     = "employee";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn)
{
    //echo "Connection ok";
}
else
{
    echo "connection failed".mysqli_connect_error();
}

?>