<?php
require_once("../DB/conexion.php");
require_once("../Modelo/modeloAlumno.php");

$alumno = new Alumno();
$datos = $alumno->getAlumno();

require_once("../Vista/index1.php");

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $orien = $_POST['clase'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $liceo = $_POST['liceo'];
    $alumno->insertAlumno($cedula,$nombre,$apellido,$email,$celular,$liceo,$orien);
   
    echo "<script>window.location='controladorInscribirse.php?ced=".$cedula."'</script>";
    
}

?>