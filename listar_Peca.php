<?php
    require './App/Entity/Peca.php';

    $pec = new Peca();
    $pecas= $pec->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listar</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border="1" class="table tabela-alunos mt-3">
        <thead>
            <td>Id Peça</td>
            <td>Nome</td>
            <td>Modelo do Carro</td>
            <td>Preço</td>
            <td>Estoque</td>
        </thead>
        <tbody id="aluno-list">
            <?php
                    foreach($pecas as $item):
                      ?>
                      <tr>
                        <td><?php echo $item->id?></td>
                        <td><?php echo $item->nome?></td>
                        <td><?php echo $item->modelo_carro?></td>
                        <td><?php echo $item->preco?></td>
                        <td><?php echo $item->estoque?></td>
                      </tr>
                      <?php
                    endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>