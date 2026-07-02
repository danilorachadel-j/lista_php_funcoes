<?php 

function gerarSenha($tamanho = 12) {

$letrasMinusculas = range('a', 'z');
$etrasMaiusculas = range('A', 'Z');
$numeros = range('0', '9');
$especiais = '!@#$%¨&*-_=+(){}[]/?;:\|`^~';

$senha - '';
$senha .= $letrasMaiusculas[random_int(0, strlen($letrasMaiusculas) - 1)];
$senha .= $letrasMinusculas[random_int(0, strlen($letrasMinusculas) - 1)];
$senha .= $numeros[random_int(0, strlen($numeros) - 1)];
$senha .= $especiais[random_int(0, strlen($especiais) - 1)];

$todosCaracteres = $letrasMinusculas. $letrasMaiusculas. $numeros. $especiais;

for ($i = 4; $i <$tamanho;$i++) {
    $indiceAleatorio = random_int(0, strlen($todosCaracteres) - 1);
    $senha .= $todosCaracteres[$indiceAleatorio];
}
return str_shuffle($senha);
}

echo gerarSenha(16);
?>
