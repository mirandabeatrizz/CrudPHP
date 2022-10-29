<?php
require_once "conexao.php";

//Classe Produto

class Produto{
    //Atributos
    public $id;
    public $nome;
    public $tipo;
    public $cor;
    public $marca;
    public $valor;
    public $quantidade;
    
   

    //Construtor
    function __construct($id, $nome, $tipo, $cor, $marca, $valor, $quantidade){
      $this->id = $id;
      $this->nome = $nome;
      $this->tipo = $tipo;
      $this->cor = $cor;
      $this->marca = $marca;
      $this->valor = $valor;
      $this->quantidade = $quantidade;
  
      
    }
    function get_id(){
      return $this->id;
    }
    function get_nome(){
      return $this->nome;
    }
    function get_tipo(){
      return $this->tipo;
    }
    function get_cor(){
      return $this->cor;
    }
    function get_marca(){
      return $this->marca;
    }
    function get_valor(){
      return $this->valor;
    }
    function get_quantidade(){
      return $this->quantidade;
    }
    

}

?>