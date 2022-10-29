<?php
require_once "conexao.php";
if(!isset($_REQUEST['id'])){
  //adicionando produto
  $titulo = "Adicionando Produto";
  $id = "";
  $nome = "";
  $tipo = "";
  $cor = "";
  $marca = "";
  $valor = "";
  $quantidade = "";
 
  
} else {
  //editando produto
  $titulo = "Editando Produto";
  $id = $_REQUEST['id'];
  $stmt = $conn->prepare("SELECT * FROM sapatos WHERE id=$id");
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_OBJ);
  $nome = $row->nome;
  $tipo = $row->tipo;
  $cor = $row->cor;
  $marca = $row->marca;
  $valor = $row->valor;
  $quantidade = $row->quantidade;
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Seus Sapatos</title>   
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>   
  <link rel="stylesheet" href="css/add.css">
</head>
<body>  
  <div class="formularios">
  <form action="add1.php" method="post">
           
                <legend><b><i><?php echo $titulo; ?></i></b></legend>
                
                <div class="textfield">
                    <label for="nome" class="">Nome do Sapato</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
               
                <br>
                
                    <label for="tipo" class="">Tipo do Sapato</label>
                    <input type="text" name="tipo" id="tipo" value="<?php echo $tipo; ?>">
               
                <br>
                
                    <label for="cor" class="">Cor do Sapato</label>
                    <input type="text" name="cor" id="cor" value="<?php echo $cor; ?>">
                
                <br>
                
                    <label for="marca" class="">Marca do Sapato</label>
                    <input type="text" name="marca" id="marca" value="<?php echo $marca; ?>">
                
                <br>
                
                    <label for="valor" class="">Valor do Sapato</label>
                    <input type="valor" name="valor" id="valor" value="<?php echo $valor; ?>">
                
                <br>
                
                    <label for="quantidade" class="">Quantidade desse Sapato</label>
                    <input type="quantidade" name="quantidade" id="quantidade" value="<?php echo $quantidade; ?>">
                </div>
                <br>
        <button type="submit">Adicionar</button>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
    </form>
  </div>
</body>
</html>