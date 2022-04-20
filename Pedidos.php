<?php
include_once 'Pedidos.class.php';
include_once 'DBConnection.class.php';
        $idPedido = $_POST['idPedido'];
        $idUsuario = $_POST['idUsuario'];
        $dtPedido = $_POST['dtPedido'];
        $dtPagamento = $_POST['dtPagamento'];
        $dtNotaFiscal = $_POST['dtNotaFiscal'];
        $notaFiscal = $_POST['notaFiscal'];
        $dtEnvio = $_POST['dtEnvio'];
        $dtRecebimento = $_POST['dtRecebimento'];
        $tipoFrete = $_POST['tipoFrete'];
        $rastreioFrete = $_POST['rastreioFrete'];
        $entregaendereco = $_POST['entregaendereco'];
        $entregaNumero = $_POST['entregaNumero'];
        $entregaCompl = $_POST['entregaCompl'];
        $entregaBairro = $_POST['entregaBairro'];
        $entregaCidade = $_POST['entregaCidade'];
        $entregaUF = $_POST['entregaUF'];
        $entregaCEP = $_POST['entregaCEP'];
        $entregaTelefone = $_POST['entregaTelefone'];
        $entregaRefer = $_POST['entregaRefer'];
        $valorTotal = $_POST['valorTotal'];
        $qtdItems = $_POST['qtdItems'];
        $dtDevolucao = $_POST['dtDevolucao'];
        $motivoDevolucao = $_POST['motivoDevolucao'];



$pedidos = new Pedidos (" $idPedido", "$idUsuario", "$dtPedido", "$dtPagamento", "$dtNotaFiscal", " $notaFiscal",
"$dtEnvio", "$dtRecebimento", "$tipoFrete", "$rastreioFrete", "$entregaendereco", "$entregaNumero", "$entregaCompl",
"$entregaBairro", "$entregaCidade", "$entregaUF", "$entregaCEP", "$entregaTelefone", "$entregaRefer", "$valorTotal",
"$qtdItems", "$dtDevolucao", "$motivoDevolucao" );
$pedidos->insert();

if ( $pedidos->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}




?>