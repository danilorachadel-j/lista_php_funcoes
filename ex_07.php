<?php 

function calcularDesconto ($valor){

if ($valor > 100 and $valor <500) {
echo "O valor com desconto ficou ".$valor - ($valor*0.1);
}

if ($valor > 500 and $valor <1000){
echo "O valor com desconto ficou ".$valor - ($valor*0.2);
}

if ($valor > 1000) {
echo "O valor com desconto ficou ".$valor - ($valor*0.3);
}
}

calcularDesconto($valor)
?>