<?php

include("conexion/conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conectar,"SELECT * FROM login WHERE usuario = '$nombre' AND pass ='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='tabla.php' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
	}
}

?>