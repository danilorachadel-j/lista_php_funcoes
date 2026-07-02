<?php 

function inverterTexto($text) {




$invertido = strrev($text);
$contarLetras = mb_strlen($text);


echo "A palavras é : $text <br><br>";
echo "A palavra ap contrário é : $invertido <br><br>";
echo "A quantidade de caracteres é : $contarLetras <br><br>";
}

$text = "Vegeta";

inverterTexto($text);