<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Cadastro ✔</title>
    <script src="js/main.js" defer></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Tela de Cadastro</h1>
    <form action="./Controller/processaCadastro.php" method="post">
        <label for="selecao">Selecione a opção a ser cadastrada:</label>
        <select name="tipo" id="selecao" onchange="mostrarCampos()" required>
            <option value="">Selecione...</option>
            <option value="Peca">Peça</option>
            <option value="Fornecedor">Fornecedor</option>
        </select>

        <div id="camposPeca" style="display: none;">
            <h3>Cadastro de Peça</h3>
            <input type="text" name="nome" placeholder="Nome da Peça" required>
            <br>
            <input type="text" name="modelo_carro" placeholder="Modelo do Carro" required>
            <br>
            <input type="text" step="0.01" name="preco" placeholder="Preço" required>
            <br>
            <input type="number" name="estoque" placeholder="Estoque" required>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </div>

        <div id="camposFornecedor" style="display: none;">
            <h3>Cadastro de Fornecedor</h3>
            <input type="text" name="nome_fornecedor" placeholder="Nome do Fornecedor" required>
            <br>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <br>
            <input type="email" name="email" placeholder="Email" required>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </div>
    </form>
</body>
</html>