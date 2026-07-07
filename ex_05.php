<?php 

function analisarTexto($text) {

 $textao = strtolower ($text);
$contarPalavras = str_word_count($textao)-1;
$contarLetras = mb_strlen($textao);
$vogais = ['a', 'e', 'i', 'o', 'u'];
$consoantes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
$totalConsoantes = 0;
$totalVogais = 0;

foreach ($vogais as $vogal) {
    $totalVogais += substr_count($textao, $vogal);
}

foreach ($consoantes as $consoante) {
    $totalConsoantes += substr_count($textao, $consoante);
}

return [
    'palavras' => $contarPalavras,
    'caracteres' => $contarLetras,
    'vogais' => $totalVogais,
     'consoante' => $totalConsoantes
];
}

$text = "O Isack e o Guilherme fizeram aniversário";


$resultado = analisarTexto($text);
echo "$text". "<br>";
echo " quantidade de palavras é:". $resultado ['palavras']."<br>";
echo "A quantidade de caracteres é:". $resultado ['caracteres']."<br>";
echo "A quantidade de vogais é:". $resultado ['vogais']."<br>";
echo "A quantidade de consoantes é:". $resultado ['consoante']."<br>";

?>