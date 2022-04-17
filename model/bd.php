<?php
namespace App;
// Faz o Require do Arquivo com as Configurações do Banco de Dados
require_once("../init.php");
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

    // Função para Incluir os Clientes no Banco de Dados
    public function incluirCliente($nome, $cpf, $email, $telefone, $cep, $rua, $numero, $complemento, $bairro, $uf)
    {
        try {
        $c = $this->pdo->prepare("INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `telefone`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `uf`, `datacriacao`) 
        VALUES (NULL, :nome, :cpf, :email, :telefone, :cep, :rua, :numero, :complemento, :bairro, :uf, current_timestamp());");

        $c->bindValue('nome', $nome, \PDO::PARAM_STR);
        $c->bindValue('cpf', $cpf, \PDO::PARAM_INT);
        $c->bindValue('email', $email, \PDO::PARAM_STR);
        $c->bindValue('telefone', $telefone, \PDO::PARAM_STR);
        $c->bindValue('cep', $cep, \PDO::PARAM_STR);
        $c->bindValue('rua', $rua, \PDO::PARAM_STR);
        $c->bindValue('numero', $numero, \PDO::PARAM_STR);
        $c->bindValue('complemento', $complemento, \PDO::PARAM_STR);
        $c->bindValue('bairro', $bairro, \PDO::PARAM_STR);
        $c->bindValue('uf', $uf, \PDO::PARAM_STR);

        $c->execute();
        }catch(\Exception $e){
            throw new \Exception("$e");
        }
    }

    // Função para editar o cliente no banco de dados
    public function editarCliente($id, $nome, $cpf, $email, $telefone, $cep, $rua, $numero, $complemento, $bairro, $uf)
    {
        try {
            $c = $this->pdo->prepare("UPDATE `cliente` SET `nome` = :nome, `cpf` = :cpf, `email` = :email, `telefone` = :telefone, `cep` = :cep, `rua` = :rua, `numero` = :numero, `complemento` = :complemento, `bairro` = :bairro, `uf` = :uf WHERE `cliente`.`id` = :id;");
    
            $c->bindValue('id', $id, \PDO::PARAM_STR);
            $c->bindValue('nome', $nome, \PDO::PARAM_STR);
            $c->bindValue('cpf', $cpf, \PDO::PARAM_INT);
            $c->bindValue('email', $email, \PDO::PARAM_STR);
            $c->bindValue('telefone', $telefone, \PDO::PARAM_STR);
            $c->bindValue('cep', $cep, \PDO::PARAM_STR);
            $c->bindValue('rua', $rua, \PDO::PARAM_STR);
            $c->bindValue('numero', $numero, \PDO::PARAM_STR);
            $c->bindValue('complemento', $complemento, \PDO::PARAM_STR);
            $c->bindValue('bairro', $bairro, \PDO::PARAM_STR);
            $c->bindValue('uf', $uf, \PDO::PARAM_STR);
    
            $c->execute();
            }catch(\Exception $e){
                throw new \Exception("$e");
            }
    }

    // Função que Deleta o Cliente no Banco de Dados
    public function deletaCliente($id)
    {
        try {
            $c = $this->pdo->prepare("DELETE FROM cliente WHERE id = :id");
            $c->bindValue('id', $id, \PDO::PARAM_STR);
            $c->execute();

            }catch(\Exception $e){
                throw new \Exception("$e");
            }
    }

    // Função que Lista o Cliente para criar a View
    public function listarClientes(){
        $c = $this->pdo->query("SELECT * FROM cliente");
        return $c->fetchAll();
    }
}



#c = new BD();
#$c->incluirCliente("Henrique do Vale", "44436241707", "ricckvale@gmail.com", "11965876681", "07411355", "Al. dos Crisantemos", "482", "", "Portão", "SP");
#$lista = $c->listarClientes();
