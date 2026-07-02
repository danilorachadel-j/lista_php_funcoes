<?php 
// (x² + y²) / (x+y)

function calcularFormula($x,$y){
if($x + $y ==0){ 
    return "Não é possível realizar a divisão por zero";
}

$resultado = ((pow($x,2)) + pow($y,2))/($x + $y);
return $resultado;
}
$x = 10;
$y = 5;

echo "Valor de x é : $x <br>";
echo "O vaor de y é: $y <br><br>";

echo "Resultado: ".calcularFormula($x, $y);
?>
