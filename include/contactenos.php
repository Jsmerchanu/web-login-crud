<?php

$user= "root";
$pass="";
$server="localhost";
$db="test2";

$mysqli=new mysqli($server,$user,$pass,$db);

if($mysqli->connect_error)
{
    echo "Lo sentimos no hay conectividad";
    echo "el error fue".$msqli->connect_error."<br>";
    exit;
}
else{
echo "conexion exitosa";

$Nombre=$_POST["Nombre"];
$Telefono=$_POST["Telefono"];
$Correo=$_POST["Correo"];
$Mensaje=$_POST["Mensaje"];

$sql="INSERT INTO contactos VALUES ('".$Nombre."','".$Telefono."','".$Correo."','".$Mensaje."')";
$mysqli->query($sql);
echo "Datos almacenados";
}

$mysqli->close();

?>