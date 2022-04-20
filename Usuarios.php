<?php
include_once 'Usuarios.class.php';
include_once 'DBConnection.class.php';

            $idUSuario = $_POST['idUsuario'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $idNivelUsuario = $_POST['idNivelUsuario'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $cep = $_POST['cep'];
            $telefone = $_POST['telefone'];
            $foto = $_POST['foto'];


$usuarios = new Produtos ("$idUSuario", "$email", "$senha", "$idNivelUsuario", "$nome", "$cpf", "$endereco", "$bairro", "$cidade",
"$uf", "$cep","$telefone", "$foto");
$usuarios->insert();

if ( $usuarios->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}




?>