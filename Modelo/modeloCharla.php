<?php
class Charla{

    private $Charlas;
    private $db;
    private $ins;

    public function __construct(){
			
        $this->db = Conectar::conexion();
        $this->Charla = array();
        $this->ins = array();
        
    }
    
    public function getCharla(){
        
        $sql = "SELECT * FROM charla WHERE";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }

    public function getCharlas1(){
        $sql = "SELECT * FROM charla WHERE hora = '17:20:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }
    public function getCharlas2(){
        $sql = "SELECT * FROM charla WHERE hora = '17:45:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }


    public function contarRegistros(){
        $sql = "SELECT COUNT(id) FROM inscribe WHERE id=36";
        $consulta = $this->db->query($sql);
        
        
        return $consulta;
    }

    public function getCharlas3(){
        $sql = "SELECT * FROM charla WHERE hora = '18:10:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }

    public function getCharlas4(){
        $sql = "SELECT * FROM charla WHERE hora = '19:10:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }

    public function getCharlas5(){
        $sql = "SELECT * FROM charla WHERE hora = '19:30:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }

    public function getCharlas6(){
        $sql = "SELECT * FROM charla WHERE hora = '20:00:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }

    public function getCharlas7(){
        $sql = "SELECT * FROM charla WHERE hora = '16:15:00'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Charlas[]=$filas;
        }
        return $this->Charlas;
        
    }




    public function seccion1($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion2($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion3($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion4($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion5($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion6($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion7($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function seccion8($charla, $cedula){
        $sql = "INSERT INTO inscribe(cedula, id) VALUES ('$cedula', '$charla')";
        
        
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
   
        
    }

    public function validar1($id){
        $sql = "SELECT COUNT(*) AS cantidad FROM  inscribe WHERE id = $id ";
       
       
        $consulta = $this->db->query($sql);
        
        while($c=$consulta->fetch_assoc()){
            $this->ins[]=$c;
        }
        return $this->ins;
        
       // return $consulta;
       
   
       
    }

    public function validar2($idd){
        $sql = "SELECT COUNT(*) AS cantidad FROM  inscribe WHERE id = $idd ";
       
       
        $consulta = $this->db->query($sql);
        
        while($c=$consulta->fetch_assoc()){
            $this->ins[]=$c;
        }
        return $this->ins;
        
       // return $consulta;
       
   
       
    }



    }

    

?>