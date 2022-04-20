<?php
include_once 'ItemsPedido.class.php';
include_once 'DBConnection.class.php';

            $idItemPedido = $_POST['idItemPedido'];
            $ordem = $_POST['ordem'];
            $idPedido = $_POST['idPedido'];
            $idEstoque = $_POST['idEstoque'];
            $qtdItem = $_POST['qtdItem'];
            $dtDevolucao = $_POST['dtDevolucao'];
            $motivoDevolucao = $_POST['motivoDevolucao'];

$itemsPedido = new ItemsPedido("$idItemPedido", " $ordem", "$idPedido",
 "$idEstoque", " $qtdItem", "$dtDevolucao", "$motivoDevolucao" );

 $itemsPedido->insert();
 if ( $itemsPedido->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}