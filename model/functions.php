<?php
session_start();

// Função para limpar Strings evitar que insiram códigos nas Querys.
// E evita informação sujas no Banco de Dados
function limpaString($string){
    $limpa = strip_tags($string);
    $limpa = trim($limpa);

    return($limpa);
}

// Mensagem de Erro
// Salva na Sessão, e ao carregar a pagina é excluída.
function mErro($mensagem, $pagina){
    $f  =  $_SESSION['eMSG'] = "$mensagem";
    $f .= header("Location: $pagina");
 
    return $f;
 }
 
 // Mensagem de Sucesso
 function mSucesso($mensagem, $pagina){
    $f  =  $_SESSION['sMSG'] = "$mensagem";
    $f .= header("Location: $pagina");
 
    return $f;
 }



?>