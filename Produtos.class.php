
<?php
include_once 'DBConnection.class.php';
$connection = new DBConnection();

class Produtos{
    
    
    private $idProduto;
    private $fabricante;
    private $nome;
    private $marca;
    private $modelo;
    private $idCategoria;
    private $descricao;
    private $unidadeMedida;
    private $largura;
    private $altura;
    private $profundidade;
    private $peso;
    private $cor;
    
    function __construct($idProduto, $fabricante, $nome, $marca, $modelo, $idCategoria, $descricao, $unidadeMedida, $largura, $profundidade, $peso, $cor) {
      $this->setIdProduto($idProduto);
      $this->setFabricante($fabricante);
    $this->setNome($nome);
    $this->setMarca($marca);
    $this->setModelo($modelo);
    $this->setIdCategoria($idCategoria);
    $this->setDescricao($descricao);
    $this->setUnidadeMedida($unidadeMedida);
    $this->setLargura($largura);
    $this->setAltura($altura);
    $this->setProfundidade($profundidade);
    $this->setPeso($peso);
    $this->setCor($cor);
    
    }
    
    public function select() {
        $connection = new DBConnection();
        $sqlCommand = "SELECT (idProduto,  fabricante,  nome,  marca,modelo ,  idCategoria, descricao, unidadeMedida, largura,  altura,   profundidade,   peso) FROM bdlojinha;";
        $rSet = $connection->query( $sqlCommand );
        
        
    }
    
    public function insert(){
        $connection = new DBConnection();
        $sqlCommand = " INSERT INTO bdlojinha (idProduto,  fabricante,  nome,  marca,modelo ,  idCategoria, descricao, unidadeMedida, largura,  altura,   profundidade,   peso) VALUES ('$idProduto',  '$fabricante',  '$nome',  '$marca, '$modelo' ,  '$idCategoria', '$descricao', '$unidadeMedida', '$largura',  '$altura',   '$profundidade',   '$peso') ";
        
        $rSet = $connection->query( $sqlCommand );
        if ( $rSet ){
            return true;
        } else {
            return false;
        }
        
    }
    
    
    public function deletar(){
        $connection = new DBConnection();
        
        $sqlCommand1 = "DELETE FROM `produtos` WHERE `produtos`. `um` = '".$this->getUm()."' ";
        $rSet = $connection->query( $sqlCommand1 );
        if ( $rSet ){
            return true;
        } else{
            return false;
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabricante){
        $this->fabricante = $fabricante;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
        return $this;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

    public function getUnidadeMedida(){
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
        return $this;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura = $largura;
        return $this;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
        return $this;
    }

    public function getProfundidade(){
        return $this->profundidade;
    }

    public function setProfundidade($profundidade){
        $this->profundidade = $profundidade;
        return $this;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        return $this;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
        return $this;
    }

}

?>