<?php 

function calcularDesconto($valor){

if ($valor >100 and <500) {
    return $valor = $valor - ($valor*0.1);
}
if ($valor >500 and <1000) {
    return $valor = $valor - ($valor*0.2);
}
if ($valor >1000) {
    return $valor = $valor - ($valor*0.3);
}else{
    return $valor;
}

}

?>
