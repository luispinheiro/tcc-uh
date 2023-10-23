<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "testedb";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro) {
    echo 'Falha da conexão com o banco de dados!: ' . $erro->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <?php 
        if(isset($_POST['btnCadastrar'])) {
            $nome = $_POST['txtNome'];
            $quantidade = $_POST['txtQuantidade'];
            $valor = $_POST['txtValor'];
            $cmdSql = 'INSERT INTO produto(nome, quantidade, valor) VALUES (:nome, :quantidade, :valor)';
        
            $conn_pronta = $conn -> prepare($cmdSql);
            $conn_pronta -> bindValue(":nome", $nome);
            $conn_pronta -> bindValue(":quantidade", $quantidade);
            $conn_pronta -> bindValue(":valor", $valor);
            $conn_pronta -> execute();
        }
    ?>
    <h1>Cadastrar produto</h1>
    <form method="post" action="">
        <input type="text" placeholder="Nome" name="txtNome">
        <br>
        <input type="number" placeholder="Quantidade" name="txtQuantidade">
        <br>
        <input type="text" placeholder="Valor" name="txtValor">
        <br>
        <input type="submit" value="Cadastrar" name="btnCadastrar">
    </form>
</body>
</html>