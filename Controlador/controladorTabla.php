<?php

require_once("../DB/conexion.php");
require_once("../Modelo/modeloAlumno.php");

$Inscripciones = new Alumno();
$datos= $Inscripciones->getInscripciones();



require_once("../Vista/tabla.php");

if(isset($_POST['submit'])){



  
}