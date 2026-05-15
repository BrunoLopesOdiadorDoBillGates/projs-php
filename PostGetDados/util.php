<?php

function calcularIMC($altura, $peso) {
    if ($altura <= 0 || $peso <= 0) {
        return 0;
    }
    return $peso / ($altura * $altura);
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25.0 && $imc <= 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30.0 && $imc <= 34.9) {
        return "Obesidade grau I";
    } elseif ($imc >= 35.0 && $imc <= 39.9) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III (mórbida)";
    }
}

?>