<?php
require './App/Entity/Peca.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $modelo_carro = $_POST['modelo_carro'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $peca = new Peca();
    $peca->nome = $nome;
    $peca->modelo_carro = $modelo_carro;
    $peca->preco = $preco;
    $peca->estoque = $estoque;

    $res = $peca->cadastrar();
    if ($res) {
        echo '<script>alert("Peça cadastrada com sucesso")</script>';
        echo '<script>window.location.href = "cadastroPeca.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar a peça")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro Peça</title>
</head>
<body>
<body>
    <div class="form-container">
        <h1>Cadastro de Peça</h1>
        <form action="" method="POST">
            <input type="text" name="nome" placeholder="Nome da Peça" required>
            <input type="text" name="modelo_carro" placeholder="Modelo do Carro" required>
            <input type="number" name="preco" placeholder="Preço" required>
            <input type="number" name="estoque" placeholder="Estoque" required>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </div>
</body>
</body>
</html>