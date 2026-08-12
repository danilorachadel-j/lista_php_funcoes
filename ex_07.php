<<?php

function calcularDesconto($valorTotal) {
    $percentualDesconto = 0;

    if ($valorTotal > 1000) {
        $percentualDesconto = 0.30;
    } elseif ($valorTotal > 500) {
        $percentualDesconto = 0.20; 
    } elseif ($valorTotal > 100) {
        $percentualDesconto = 0.10;
    } else {
        $percentualDesconto = 0.00; 
    }

    $descontoAplicado = $valorTotal * $percentualDesconto;
    $valorFinal = $valorTotal - $descontoAplicado;

    return [
        'valor_original' => $valorTotal,
        'desconto' => $descontoAplicado,
        'valor_final' => $valorFinal
    ];
}


echo "Simulações do Carrinho de Compras: \n\n";

$resultado1 = calcularDesconto(80.00);
echo "Compra 1:\n";
echo "Valor Original: R$ " . number_format($resultado1['valor_original'], 2, ',', '.') . "\n";
echo "Desconto: R$ " . number_format($resultado1['desconto'], 2, ',', '.') . "\n";
echo "Valor Final: R$ " . number_format($resultado1['valor_final'], 2, ',', '.') . "\n";

$resultado2 = calcularDesconto(250.00);
echo "Compra 2:\n";
echo "Valor Original: R$ " . number_format($resultado2['valor_original'], 2, ',', '.') . "\n";
echo "Desconto: R$ " . number_format($resultado2['desconto'], 2, ',', '.') . "\n";
echo "Valor Final: R$ " . number_format($resultado2['valor_final'], 2, ',', '.') . "\n";

$resultado3 = calcularDesconto(1200.00);
echo "Compra 3:\n";
echo "Valor Original: R$ " . number_format($resultado3['valor_original'], 2, ',', '.') . "\n";
echo "Desconto: R$ " . number_format($resultado3['desconto'], 2, ',', '.') . "\n";
echo "Valor Final: R$ " . number_format($resultado3['valor_final'], 2, ',', '.') . "\n";

?>
