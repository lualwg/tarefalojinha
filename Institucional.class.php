<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class Institucional{

private  $idInstituicao;
private  $nome;
private $cpf_cnpj;
private $tipoPessoa;
private $endereco;
private $bairro;
private $cidade;
private $uf;
private $cep;
private $telefone;
private $email;
private $logo;



function __construct($idInstituicao, $nome, $cpf_cnpj, $tipoPessoa, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $email, $logo){

$this->setIdInstituicao($idInstituicao);
$this->setNome($nome);
$this->setCpf_cnpj($cpf_cnpj);
$this->setTipoPessoa($tipoPessoa);
$this->setEndereco($endereco);
$this->setBairro($bairro);
$this->setCidade($cidade);
$this->setCep($cep);
$this->setTelefone($telefone);
$this->setEmail($email);
$this->setLogo($logo);


}


    public function getIdInstituicao(){
        return $this->idInstituicao;
    }

    public function setIdInstituicao($idInstituicao){
        $this->idInstituicao = $idInstituicao;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function setCpf_cnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa){
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
        return $this;
    }
    public function select() {
        $connection = new DBConnection();
        $sqlCommand = "SELECT *FROM intitucional (idInstituicao, nome, cpf_cnpj, tipoPessoa, endereco, bairro, cidade, uf, cep, telefone, email, logo) FROM bdlojinha;";
        $rSet = $connection->query( $sqlCommand );
        
        
    }
    
    
    public function insert(){
        $connection = new DBConnection();
        $idInstituica = $this->getIdInstituicao();
        $nom = $this->getNome();
        $cpfcnpj = $this->getCpf_cnpj();
        $tipop = $this->getTipoPessoa();
        $enderec = $this->getEndereco();
        $bairr = $this->getBairro();
        $cidad = $this->getCidade();
        $uF = $this->getUf();
        $ceep = $this->getCep();
        $tel = $this->getTelefone();
        $emai = $this->getEmail();
        $log = $this->getLogo();
    
        $sqlCommand = " INSERT INTO institucional (idInstituicao, nome, cpf_cnpj, tipoPessoa, endereco, bairro, cidade, uf, cep, telefone, email,logo) VALUES 
    ('$idInstituica', '$nom', '$cpfcnpj', '$tipop', '$enderec', '$bairr', 
    '$cidad', '$uF', '$ceep', '$tel', '$emai', '$log') ";
        
        $rSet = $connection->query( $sqlCommand );
        if ( $rSet ){
            return true;
        } else {
            return false;
        }
        
    }
    
  /*  public function deletar(){
        $connection = new DBConnection();
        
        $sqlCommand1 = "DELETE FROM `institucional` WHERE `institucional`. `um` = '".$this->getUm()."' ";
        $rSet = $connection->query( $sqlCommand1 );
        if ( $rSet ){
            return true;
        } else{
            return false;
        } */
        
    
}












?>