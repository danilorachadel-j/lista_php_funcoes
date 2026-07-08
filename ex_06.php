<?php

function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);
    if ($origem === $destino) {
        return $valor;
    }
    switch ($origem) {
        case 'C':
            $celsius = $valor;
            break;
        case 'F':
            $celsius = ($valor - 32) * 5 / 9;
            break;
        case 'K':
            $celsius = $valor - 273.15;
            break;
        default:
            return "Erro: Escala de origem inválida. Use 'C', 'F' ou 'K'.";
    }
    switch ($destino) {
        case 'C':
            return $celsius;
        case 'F':
            return ($celsius * 9 / 5) + 32;
        case 'K':
            return $celsius + 273.15;
        default:
            return "Erro: Escala de destino inválida. Use 'C', 'F' ou 'K'.";
    }
}
echo "--- Testes do Sensor ---\n";

$f = converterTemperatura(100, 'C', 'F');
echo "100°C em Fahrenheit: " . round($f, 2) . "°F\n"; 

$c = converterTemperatura(0, 'K', 'C');
echo "0K em Celsius: " . round($c, 2) . "°C\n"; 

$k = converterTemperatura(77, 'F', 'K');
echo "77°F em Kelvin: " . round($k, 2) . "K\n"; 

?>