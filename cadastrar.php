<?php
    require 'conexaopdo.php'
?>

<!DOCTYPE html>
<html lang="enpt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h2>Cadastro:</h2>
    <form action="inserir.php" method="post">
        <label for="produto">Produto: </label>
        <input type="text" id="produto" name="produto" required><br><br>

        <label for="quant">Quantidade: </label>
        <input type="number" id="quant" name="quant" required><br><br>

        <label for="preco">Preço: </label>
        <input type= "number" id="preco" name="preco" required> <br><br>

        <input type="submit"  value="Salvar">
    </form>
</body>
</html>