<?php 

function mascararcpf($cpf) {

$cpf = preg_replace ('/[^0-9]/', '', $cpf);

if (strlen($cpf) !== 11){
    return "CPF inválido";
}
return '***.***.***' . ($cpf, -4);

}

echo mascararcpf("123.456.789.06");

mascararcpf($cpf)