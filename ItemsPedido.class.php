<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class ItemsPedido{
    
   private $idItemPedido;
   private $ordem;
   private $idPedido;
   private $idEstoque;
   private $qtdItem;
   private $dtDevolucao;
   private $motivoDevolucao;

   
   
   function __construct($idItemPedido, $ordem, $idPedido, $idEstoque, $qtdItem, $dtDevolucao, $motivoDevolucao){
       $this->setIdItemPedido($idItemPedido);
       $this->setOrdem($ordem);
       $this->setIdPedido($idPedido);
       $this->setQtdItem($qtdItem);
       $this->setDtDevolucao($dtDevolucao);
       $this->setMotivoDevolucao($motivoDevolucao);
       
   }
   
   
   
    public function getIdItemPedido(){
        return $this->idItemPedido;
    }

    public function setIdItemPedido($idItemPedido){
        $this->idItemPedido = $idItemPedido;
        return $this;
    }

    public function getOrdem(){
        return $this->ordem;
    }

    public function setOrdem($ordem){
        $this->ordem = $ordem;
        return $this;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
        return $this;
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
        return $this;
    }

    public function getQtdItem(){
        return $this->qtdItem;
    }

    public function setQtdItem($qtdItem){
        $this->qtdItem = $qtdItem;
        return $this;
    }

    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
        return $this;
    }

    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
        return $this;
    }
    public function select() {
        $connection = new DBConnection();
        $sqlCommand = "SELECT *FROM itemspedido(idItemPedido, ordem, idPedido, idEstoque, qtdItem, dtDevolucao, motivoDevolucao) FROM bdlojinha;";
        $rSet = $connection->query( $sqlCommand );
        
        
    }
    
    public function insert(){
         $connection = new DBConnection();
         $iditPedido = $this->getIdItemPedido();
         $ord = $this->getOrdem();
         $idPedid = $this->getIdPedido();
         $idEstoq = $this->getIdEstoque();
         $qtdItm = $this->getQtdItem();
         $datadev = $this->getDtDevolucao();
         $mtvDev = $this->getmotivoDevolucao();
         
         $sqlCommand = " INSERT INTO itemspedido (idItemPedido,
             ordem, idPedido, idEstoq, qtdItem, dtDevolucao,
             motivoDevolucao) VALUES ('$iditPedido', 
             '$ord', '$idPedid', '$idEstoq', '$qtdItm',
             '$datadev', '$mtvDev') ";
        
        $rSet = $connection->query( $sqlCommand );
        if ( $rSet ){
            return true;
        } else {
            return false;
        }
        
    }
    
    public function deletar(){
        $connection = new DBConnection();
        
        $sqlCommand1 = "DELETE FROM `itemsPedido` WHERE `itemsPedido`. `um` = '".$this->getUm()."' ";
        $rSet = $connection->query( $sqlCommand1 );
        if ( $rSet ){
            return true;
        } else{
            return false;
        }
        
    }
    
    
    
}






























?>