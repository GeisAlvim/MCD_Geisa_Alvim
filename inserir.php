<?php
    require 'conexaopdo.php';
    $produto = $_POST['produto'];
    $quant = $_POST['quant'];
    $preco = $_POST['preco'];

    $sql = $pdo->prepare("INSERT INTO estoque (produto, quant, preco) VALUES (:produto,:quant,:preco)");
    $sql->bindValue('produto', $produto);
    $sql->bindValue('quant', $quant);
    $sql->bindValue('preco', $preco);

    $sql->execute();

    header("Location:index.php");
?>