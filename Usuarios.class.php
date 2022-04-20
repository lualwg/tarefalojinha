<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class Usuarios 
{
    private $idUSuario;
    private $email;
    private $senha;
    private $idNivelUsuario;
    private $nome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $foto;
   
    
    function __construct($idUsuario, $email, $senha, $idNivelUsuario, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto){
        $this->setIdUSuario($idUsuario);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setIdNivelUsuario($idNivelUsuario);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setFoto($foto);
        
        
        
  
    }
    


    public function getIdUSuario(){
        return $this->idUSuario;
    }

    public function setIdUSuario($idUSuario){
        $this->idUSuario = $idUSuario;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }

    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
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

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }



    public function select() {
        $connection = new DBConnection();
        $sqlCommand = "SELECT *FROM usuarios (idUsuario, email, senha, idNivelUsuario, nome, cpf, endereco, bairro, cidade, uf, cep, telefone, foto) FROM bdlojinha;";
        $rSet = $connection->query( $sqlCommand );
        
        
    }
    
    
    public function insert(){
        $connection = new DBConnection();
        $idUsuar = $this->getIdUSuario();
        $emai = $this->getEmail();
        $senh = $this->getSenha();
    $idNivelUsuar = $this->getIdNivelUsuario();
    $nom = $this->getNome();
    $cpff = $this->getCpf();
    $enderec = $this->getEndereco();
    $bairroo = $this->getBairro();
    $cidad = $this->getCidade();
    $uff = $this->getUf();
    $cp = $this->getCep();
    $tel = $this->getTelefone();
    $ft =$this->getFoto();

        $sqlCommand = " INSERT INTO usuarios (idUsuario, email, senha, idNivelUsuario, nome, cpf, endereco, bairro, cidade, uf, cep, telefone, foto)
 VALUES ('$idUsuar', '$emai', '$senh', '$idNivelUsuar', '$nom', '$cpff', '$enderec', '$bairroo', '$cidad', '$uff', 
 '$cp', '$tel', '$ft') ";
        
        $rSet = $connection->query( $sqlCommand );
        if ( $rSet ){
            return true;
        } else {
            return false;
        }
        
    }








}












?>