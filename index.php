<?php
    require './App/Entity/Peca.php';

    if(isset($_POST['cadastrar'])){

        $descricao = $_POST['descricao'];
        $cor = $_POST['cor'];
        $icone = $_POST['icone'];

        // $cat = new Peca();
        // $cat->descricao = $descricao;
        // $cat->cor = $cor;
        // $cat->icone = $icone;

        $res = $cat->cadastrar();

        if($res){
            echo '<script> alert("Cadastrado com sucesso")</script>';
        }else{
            echo '<script> alert("Erro ao cadastrar") </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Categorias</h1>
    <form action="" method="post">
        <input type="text" name="descricao" id="descricao" placeholder="Digite sua descricao">
        <br>
        <input type="text" name="cor" id="cor" placeholder="Digite a cor">
        <br>
        <input type="text" name="icone" id="icone" placeholder="Digite seu icone">
        <br>
        <select name="" id="">
            <option value="">Selecione a opção a ser cadastrada</option>
            <option value="">Peca</option>
            <option value="">Fornecedor</option>
        </select>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>