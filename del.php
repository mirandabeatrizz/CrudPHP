<?php
require_once "Produto.class.php";

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM sapatos WHERE id=".$id;
    $conn->exec($sql);
    header('Location:acesso.php');	
}
?>