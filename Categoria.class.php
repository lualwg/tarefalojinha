<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class Categoria{
    
    private $idCategoria;
    private $descricao;
    
    public function __construct($idCategoria, $descricao){
        $this->setIdCategoria($idCategoria);
        $this->setDescricao($descricao);
        
    }
    
   
    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }



public function select() {
    $connection = new DBConnection();
    $sqlCommand = "SELECT *FROM categorias (idcategoria, descricao) FROM bdlojinha;";
    $rSet = $connection->query( $sqlCommand );
    
    
}

public function insert(){
    $connection = new DBConnection();
    $idCat = $this->getidCategoria();
    $desc = $this->getDescricao();
    
    $sqlCommand = " INSERT INTO categorias (idCategoria, descricao) VALUES ('$idCat', '$desc') ";
    
    $rSet = $connection->query( $sqlCommand );
    if ( $rSet ){
        return true;
    } else {
        return false;
    }
    
}

public function deletar(){
    $connection = new DBConnection();
    
    $sqlCommand1 = "DELETE FROM `categorias` WHERE `categoria`. `um` = '".$this->getUm()."' ";
    $rSet = $connection->query( $sqlCommand1 );
    if ( $rSet ){
        return true;
    } else{
        return false;
    }
    
}

}


?>