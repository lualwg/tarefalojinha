<?php
include_once 'Estoque.class.php';
include_once 'DBConnection.class.php';

$idEstoque = $_POST['idEstoque'];
$idProduto = $_POST['idProduto'];
$dtEntrada = $_POST['dtEntrada'];
$quantidade = $_POST ['quantidade'];
$dtFabricacao = $_POST ['dtFabricacao'];
 $dtVencimento =$_POST ['dtVencimento'];
 $nfCompra = $_POST ['nfCompra'];
 $precoCompra = $_POST['precoCompra'];
 $icmsCompra = $_POST['icmsCompra'];
$precoVenda = $_POST['precoVenda'];
 $qtdVendida = $_POST['qtdVendida'];
 $qtdOcorrencia =$_POST['qtdOcorrencia'];
 $ocorrencia = $_POST['ocorrencia'];
 
 $estoque = new Estoque("$idEstoque", "$idProduto", "$dtEntrada", "$quantidade", "$dtFabricacao", "$dtVencimento", "$nfCompra", "$precoCompra", "$icmsCompra", "$precoVenda", "$qtdVendida", "$qtdOcorrencia", "$ocorrencia");
 $estoque->insert();
 
 if ( $estoque->insert()){
     echo  "foi foi";
 }else{
     echo  "nao";
 }
 
 