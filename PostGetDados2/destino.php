<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos</h1>

    <?php
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    ?>

    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nome</td>
            <td><?php echo $nome; ?></td>
        </tr>
        <tr>
            <td>Celular</td>
            <td><?php echo $celular; ?></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><?php echo $cidade; ?></td>
        </tr>
    </table>
    
    <br>
    <form action="form.php" method="POST"><br>
        <button type="submit">Voltar</button>
</body>
</html>