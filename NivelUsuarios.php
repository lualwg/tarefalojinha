<?php
include_once 'NivelUsuarios.class.php';
include_once 'DBConnection.class.php';

$idNivelUsuario = $_POST['idNivelUsuario'];
$nivel = $_POST['nivel'];



$nivelUsuario = new NivelUSuario("$idNivelUsuario", "$nivel");
$nivelUsuario->insert();

if ( $nivelUsuario->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}




?>