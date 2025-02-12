<?php
require './App/Entity/Peca.php';

if(isset($_POST['cadastrar'])) {
    $tipo = $_POST['tipo'];

    if ($tipo === "Peca") {
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
    } 
    elseif ($tipo === "Fornecedor") {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $_POST['nome_fornecedor'];
        $fornecedor->telefone = $_POST['telefone'];
        $fornecedor->email = $_POST['email'];

        $res = $fornecedor->cadastrar();
    } 
    else {
        $res = false;
    }

    if ($res) {
        echo '<script>alert("Cadastrado com sucesso!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar!"); window.history.back();</script>';
    }
}
?>
