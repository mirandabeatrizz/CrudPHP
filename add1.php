<?php
require_once "Produto.class.php";

//Adiciona novo produto
if(!isset($_REQUEST['id']) || $_REQUEST['id']==""){ //! = NOT
    $nome = $_REQUEST['nome'];
    $tipo = $_REQUEST['tipo'];
    $cor = $_REQUEST['cor'];
    $marca = $_REQUEST['marca'];
    $valor = $_REQUEST['valor'];
    $quantidade = $_REQUEST['quantidade'];

    $sql = "INSERT INTO sapatos (nome, tipo, cor, marca, valor, quantidade) VALUES ('$nome', '$tipo', '$cor', '$marca', '$valor', '$quantidade')";
    $conn->exec($sql);
    header('Location:acesso.php');	
} else {
   // editar o produto
   $id = $_REQUEST['id'];
   $nome = $_REQUEST['nome'];
   $tipo = $_REQUEST['tipo'];
   $cor = $_REQUEST['cor'];
   $marca = $_REQUEST['marca'];
   $valor = $_REQUEST['valor'];
   $quantidade = $_REQUEST['quantidade'];
   $sql = "UPDATE sapatos SET nome='$nome', tipo='$tipo', cor='$cor', marca='$marca', valor='$valor', quantidade='$quantidade' WHERE id=$id";
   //print($sql);
   $stmt =  $conn->prepare($sql);
   //$stmt->bindParam(1,$nome);
   //$stmt->bindParam(2,$descricao);
  // $stmt->bindParam(3,$preco);
  //$stmt->bindParam(4,$codigo);    
   $stmt->execute();
   header('Location:acesso.php');
}

?>