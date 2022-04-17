<?php

// Função para limpar Strings evitar que insiram códigos nas Querys.
// E evita informação sujas no Banco de Dados
function l($string){
    $limpa = strip_tags($string);
    $limpa = trim($limpa);
    $limpa = str_replace("'","",$limpa);
    $limpa = str_replace("\"","",$limpa);

    return($limpa);
}


?>