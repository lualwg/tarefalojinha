<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class NivelUSuario {
private $idNivelUsuario;
private $nivel;


function __construct($idNivelUsuario, $nivel){
    $this->setIdNivelUsuario($idNivelUsuario);
    $this->setNivel($nivel);
    
}

public function select() {
    $connection = new DBConnection();
    $sqlCommand = "SELECT *FROM nivelusuarios (idNivelUsuario, nivel) FROM bdlojinha;";
    $rSet = $connection->query( $sqlCommand );
    
    
}


public function insert(){
    $connection = new DBConnection();
    $idniv = $this->getIdNivelUsuario();
    $niv = $this->getNivel();
    $sqlCommand = " INSERT INTO nivelusuarios (idNivelUsuario, nivel) VALUES ('$idniv', '$niv') ";
    
    $rSet = $connection->query( $sqlCommand );
    if ( $rSet ){
        return true;
    } else {
        return false;
    }
    
}

public function deletar(){
    $connection = new DBConnection();
    
    $sqlCommand1 = "DELETE FROM `nivelUsuarios` WHERE `nivelUsuario`. `um` = '".$this->getUm()."' ";
    $rSet = $connection->query( $sqlCommand1 );
    if ( $rSet ){
        return true;
    } else{
        return false;
    }
    
}






    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }

    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
        return $this;
    }

}

