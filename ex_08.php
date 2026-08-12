<?php

function ordenarNomes($listaNomes) {
    $vetorNomes = explode(',', $listaNomes);
    
    $vetorLimpo = array_map('trim', $vetorNomes);
    
    sort($vetorLimpo);
    
    return $vetorLimpo;
}

$alunos = " Mariana, Carlos, ana, Bruno,  julia ";

$alunosOrdenados = ordenarNomes($alunos);

print_r($alunosOrdenados);

?>