<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Peças e Fornecedores</title>
    <link rel="stylesheet" href="relatorio.css">
</head>
<body>
    <div class="form-container">
        <h1>Relatório de Cadastro</h1>
        <form action="" method="POST">
            <select name="relatorio" required>
                <option value="">Selecione o tipo de relatório</option>
                <option value="pecas">Relatório de Peças</option>
                <option value="fornecedores">Relatório de Fornecedores</option>
            </select>
            <input type="submit" name="gerarRelatorio" value="Gerar Relatório">
        </form>

        <?php
        if (isset($_POST['gerarRelatorio'])) {
            $relatorio = $_POST['relatorio'];

            if ($relatorio == 'pecas') {
                include 'listar_Peca.php';
            } elseif ($relatorio == 'fornecedores') {
                include 'listar_Fornecedores.php';
            }
        }
        ?>
    </div>
</body>
</html>
