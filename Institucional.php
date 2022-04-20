<?php
include_once 'Institucional.class.php';
include_once 'DBConnection.class.php';

                    $idInstituicao = $_POST['idInstituicao'];
                    $nome = $_POST['nome'];
                    $cpf_cnpj = $_POST['cpf_cnpj'];
                    $tipoPessoa = $_POST['tipoPessoa'];
                    $endereco = $_POST['endereco'];
                    $bairro = $_POST['bairro'];
                    $cidade = $_POST['cidade'];
                    $uf = $_POST['uf'];
                    $cep = $_POST['cep'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $logo = $_POST['logo'];

$institucional = new Institucional("$idInstituicao", "$nome", 
"$cpf_cnpj", "$tipoPessoa", "$endereco", "$bairro", "$cidade", "$uf", " $cep", "$telefone", "$email", "$logo" );

$institucional->insert();
if ( $institucional->insert()){
    echo  "foi foi";
}else{
    echo  "erro";
}





















?>