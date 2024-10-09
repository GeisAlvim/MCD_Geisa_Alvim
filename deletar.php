<?php
    require 'conexaopdo.php';
    $id = $_REQUEST['id'];

    $sql = $pdo->prepare("DELETE FROM estoque where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

?>''