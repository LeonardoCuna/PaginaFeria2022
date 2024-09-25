<?php







require_once("../Vista/login.html");

if(isset($_POST['btningresar'])){

if($_POST['usuario'] == "Pablito" && $_POST['pass'] == "pablomon"){
    header("location:controladorTabla.php");
}

  
}