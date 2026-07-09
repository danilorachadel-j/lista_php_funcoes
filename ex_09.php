<?php

function analisarNumero($numero) {
    $numero = (int)$numero;
    
    $parOuImpar = ($numero % 2 === 0) ? "Par" : "Ímpar";

    if ($numero <= 1) {
        $ePrimo = false;
    } else {
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i === 0) {
                $ePrimo = false;
                break;
            }
        }
    }
    $primoResultado = $ePrimo ? "Primo" : "Não é primo";
    $somaDivisores = 0;
    if ($numero > 1) {
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i === 0) {
                $somaDivisores += $i;
            }
        }
    }
    $perfeitoResultado = ($somaDivisores === $numero && $numero > 0) ? "Perfeito" : "Não é perfeito";

    return [
        "numero"   => $numero,
        "paridade" => $parOuImpar,
        "primo"    => $primoResultado,
        "perfeito" => $perfeitoResultado
    ];
}

$resultado6 = analisarNumero(6);
print_r($resultado6);

$resultado7 = analisarNumero(7);
print_r($resultado7);

?>