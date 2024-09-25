<?php
class Alumno{

    private $Alumno;
    private $db;

    public function __construct(){
			
        $this->db = Conectar::conexion();
        $this->Alumno = array();
        
    }
    
    public function getAlumno(){
        
        $sql = "SELECT * FROM alumno ORDER BY cedula";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Alumno[]=$filas;
        }
        return $this->Alumno;
        
    }

    public function insertAlumno($c, $n, $a, $m, $cc, $l, $o){
        
        $sql = "INSERT INTO Alumno VALUE ('$c', '$n', '$a', '$m', '$cc', '$l', '$o')";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
    }


    public function getInscripciones(){
        $sql="SELECT charla.*, alumno.*, inscribe.*
        FROM ((inscribe
        INNER JOIN alumno ON inscribe.cedula = alumno.cedula)
        INNER JOIN charla ON inscribe.id = charla.id)";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Alumno[]=$filas;
        }
        return $this->Alumno;
    }



    
}
?>