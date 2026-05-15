<?php
include 'util.php';

$resultado = '';
$altura = '';
$peso = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    
    if (is_numeric($altura) && is_numeric($peso) && $altura > 0 && $peso > 0) {
        $imc = calcularIMC($altura, $peso);
        $classificacao = classificarIMC($imc);
        $resultado = "<h3>Resultado:</h3>";
        $resultado .= "<p>Altura: " . number_format($altura, 2) . " m</p>";
        $resultado .= "<p>Peso: " . number_format($peso, 2) . " kg</p>";
        $resultado .= "<p>IMC: " . number_format($imc, 2) . "</p>";
        $resultado .= "<p>Classificação: " . $classificacao . "</p>";
    } else {
        $resultado = "<p>Erro: Por favor, insira valores válidos (altura > 0 e peso > 0).</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

    <h1>Calculadora de Índice de Massa Corporal (IMC)</h1>
    
    <form method="POST" action="">
        <p>
            <label for="altura">Altura (em metros): </label>
            <input type="text" name="altura" id="altura" value="<?php echo $altura; ?>" required>
        </p>
        <p>
            <label for="peso">Peso (em quilogramas): </label>
            <input type="text" name="peso" id="peso" value="<?php echo $peso; ?>" required>
        </p>
        <p>
            <input type="submit" value="Calcular IMC">
        </p>
    </form>
    
    <?php echo $resultado; ?>
    
    <hr>
    
    <p>Tabela de Classificação do IMC:</p>
    <ul>
        <li>Abaixo de 18,5: Abaixo do peso</li>
        <li>18,5 a 24,9: Peso normal</li>
        <li>25,0 a 29,9: Sobrepeso</li>
        <li>30,0 a 34,9: Obesidade grau I</li>
        <li>35,0 a 39,9: Obesidade grau II</li>
        <li>Acima de 40,0: Obesidade grau III (mórbida)</li>
    </ul>

</body>
</html>