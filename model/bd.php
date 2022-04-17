<?php

namespace App;
// Faz o Require do Arquivo com as Configurações do Banco de Dados
include_once __DIR__ .("\..\\init.php");

use PDO;

// Cria a classe principal de conexão.
class BD
{
    protected  $pdo;

    // Função Construct que traz a conexão
    public function __construct()
    {
        $this->con();
    }

    // Cria a função de Conexão utilizando as informações do init.php
    public function con()
    {
        try {
            $this->pdo = new \PDO('mysql:host=' . BD_SERVIDOR . ';dbname=' . BD_BANCO . '', BD_USUARIO, BD_SENHA, array(PDO::ATTR_PERSISTENT => false, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
        } catch (\Exception $e) {
            throw new \Exception("$e");
        }
    }
}


#c = new BD();
#$c->incluirCliente("Henrique do Vale", "44436241707", "ricckvale@gmail.com", "11965876681", "07411355", "Al. dos Crisantemos", "482", "", "Portão", "SP");
#$lista = $c->listarClientes();
