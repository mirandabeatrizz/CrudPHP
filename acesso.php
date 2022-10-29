<?php
//PHP 5.6
  //Aprendendo CRUD (create-read-update-delete) com PHP, PDO e Bootstrap 5.1.3
  //https://yourblogcoach.com/login-with-google-account-using-php/
  require_once "conexao.php";
  require_once "Produto.class.php";
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Seus Sapatos</title>  
    <link rel="stylesheet" href="css/acesso.css"> 
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>   
  </head>
  <body>
  <div class="m-5">
        <table class="table text-black table-bg">
            <h3><i>Seus Sapatos Cadastrados:<i><h3>
          <thead>
            <tr>
              <th>Codigo</th> 
              <th>Nome</th>
              <th>Tipo</th> 
              <th>Cor</th> 
              <th>Marca</th>
              <th>Valor</th>  
              <th>Quantidade</th> 
              <th>Ações</th>
            </tr>
          </thead>
</div>
    <tbody>
<?php
//inicio do looping
$stmt = $conn->prepare("SELECT * FROM sapatos");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
?>
      <tr>
        <td><?php echo $row->id;  ?></td>
        <td><?php echo $row->nome;  ?></td>
        <td><?php echo $row->tipo;  ?></td>
        <td><?php echo $row->cor;  ?></td>
        <td><?php echo $row->marca;  ?></td>
        <td><?php echo $row->valor;  ?></td>
        <td><?php echo $row->quantidade;  ?></td>

        <td>
        <a href="add.php?id=<?php echo $row->id; ?>" class="btn btn-outline-success" role="button" aria-pressed="true">Editar</a>

        <a href="del.php?id=<?php echo $row->id; ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Excluir</a>
      </tr>
<?php  } //fim do looping  ?>
    </tbody>
  </table>
  <a href="add.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Adicionar</a>
  </body>
</html>