<?php 

function converterTemperatura($temp){

$tempNumero = 2;
$celsius1 = 'C';
$fahrenheit2 = 'F';
$kelvin3 = 'K';


if ($temp = $celsius1){
    if($temp02 = $fahrenheit2){
$tempResultado = (($tempNumero * (9/5)) + 32);
echo "$tempResultado";

    } else{

    $tempResultado = ($tempNumero);
    echo "$tempResultado";
    };
}

}

$temp02 = 'K';
$temp = 'C';

converterTemperatura($temp);
?>