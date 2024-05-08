<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("No haay conexion:" .mysqli_connect_error());
}
?>