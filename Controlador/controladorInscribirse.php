<?php

require_once("../DB/conexion.php");
require_once("../Modelo/modeloCharla.php");

$Charla1 = new Charla();
$datos1 = $Charla1->getCharlas1();
$Charla2 = new Charla();
$datos2 = $Charla2->getCharlas2();
$Charla3 = new Charla();
$datos3 = $Charla3->getCharlas3();
$Charla4 = new Charla();
$datos4 = $Charla4->getCharlas4();
$Charla5 = new Charla();
$datos5 = $Charla5->getCharlas5();
$Charla6 = new Charla();
$datos6 = $Charla6->getCharlas6();
$Charla7 = new Charla();
$datos7 = $Charla7->getCharlas7();

$cantidades = new Charla();

$cantidades1 = new Charla();


$insert= new Charla();
require_once("../Vista/inscribirse-charlas.php");

if(isset($_POST['submit'])){
    $cedula=$_GET['ced'];
   $ins=$_POST['Inscripcion1'];
   $insert->seccion1($ins, $cedula);

   $ins2=$_POST['Inscripcion2'];
   $insert->seccion2($ins2, $cedula);

   $ins3=$_POST['Inscripcion3'];
   $insert->seccion3($ins3, $cedula);

   $ins4=$_POST['Inscripcion4'];
   $insert->seccion4($ins4, $cedula);

   $ins5=$_POST['Inscripcion5'];
   $insert->seccion5($ins5, $cedula);


   $ins6=$_POST['Inscripcion6'];
   $insert->seccion6($ins6, $cedula);

   $ins7=$_POST['Inscripcion7'];
   $insert->seccion7($ins7, $cedula);


 echo "<script>window.location='../index.php'</script>";
}



?>