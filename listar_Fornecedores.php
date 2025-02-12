<?php
    require './App/Entity/Fornecedor.php';

    $forn = new Fornecedor();
    $fornecedores = $forn->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listar Colaboradores</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Lista de Colaboradores</h2>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID Colaborador</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($fornecedores as $i):
                ?>
                <tr>
                    <td><?php echo $i->id ?></td>
                    <td><?php echo $i->nome ?></td>
                    <td><?php echo $i->email ?></td>
                    <td><?php echo $i->telefone ?></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
