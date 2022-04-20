<?php
include_once 'Categoria.class.php';
include_once 'DBConnection.class.php';

$idCategoria = $_POST['idCategoria'];
$descricao = $_POST['descricao'];



$categoria = new Categoria("$idCategoria", "$descricao");
$categoria->insert();

if ( $categoria->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}




?>