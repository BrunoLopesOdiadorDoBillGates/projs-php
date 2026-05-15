<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    $string_conexao =
    "pgsql:host=localhost; port=5432; dbname=bd_aula;
     user=postgres; password=postgres";

     try{
        $conn = new PDO($string_conexao);
        echo "Está conectado.<br>";
     } catch (PDOException $e) {
        echo "Serviço indisponível no momento, tente mais tarde!";
        exit;
     }
     
     $varSQL = "SELECT * FROM aluno order by nome";
    $select = $conn->query($varSQL);

?>    

    <table border="1">
        <tr>
        
        <th>Id</th>
        <th>Nome</th>
        <th>Celular</th>
        <th>Lápis</th>
        </tr>
<?php
    while ( $linha = $select->fetch() ) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $celular = $linha['celular'];
        
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $celular . "</td>";
        echo "<td><a href='mostra.php?id=$id'><img height=40 src='pencil.png'></a></td>";
        echo "</tr>";
    }
?>

</table>
</body>