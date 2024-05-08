<?php

include("login.php");

$nombre = $_POST["usuario"];
$pass   = $_POST["pass"];

//Login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password='$pass';");
    $nr = mysqli_num_rows($query);
    if($nr == true)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='index.php' </script>";
    }else
    {
        echo "<script> alert('Usuario no existe'); window.location='../paginas/index.html' </script>";
    }
} 
//Registrar
if(isset($_POST["btnregistrar"]))
{
    
    $sqlgrabar = "INSERT INTO login (usuario,password) values ('$nombre','$pass')";
   
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='../paginas/index.html' </script>";
    }else 
    {
        echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
        
    }
}

?>
