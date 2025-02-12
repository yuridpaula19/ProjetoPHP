<?php
require './App/Entity/Fornecedor.php';

if (isset($_POST['cadastrar'])) {
    $nome_fornecedor = $_POST['nome_fornecedor'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $fornecedor = new Fornecedor();
    $fornecedor->nome = $nome_fornecedor;
    $fornecedor->telefone = $telefone;
    $fornecedor->email = $email;

    $res = $fornecedor->cadastrar();
    if ($res) {
        echo '<script>alert("Fornecedor cadastrado com sucesso")</script>';
        echo '<script>window.location.href = "cadastroFornecedor.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar o fornecedor")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro Fornecedor</title>
</head>
<body>
    <div class="form-container">
        <h1>Cadastro de Fornecedor</h1>
        <form action="" method="POST">
            <input type="text" name="nome_fornecedor" placeholder="Nome do Fornecedor" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </div>
</body>
</html>