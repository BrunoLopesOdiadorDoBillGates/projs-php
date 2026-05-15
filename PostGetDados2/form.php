<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    
    <form action="destino.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Celular: <input type="text" name="celular" required><br><br>
        Cidade: <input type="text" name="cidade" required><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>