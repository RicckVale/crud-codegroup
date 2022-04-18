<?php
namespace App;
include_once("functions.php");

class Cliente extends BD
{
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $telefone;
    public $cep;
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $uf;

    
    // Função para Incluir os Clientes no Banco de Dados
    public function incluirCliente()
    {
        try {
            $c = $this->pdo->prepare("INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `telefone`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `datacriacao`) VALUES (NULL, :nome, :cpf, :email, :telefone, :cep, :rua, :numero, :complemento, :bairro, :cidade, :uf, current_timestamp());");

            $c->bindValue('nome', $this->nome, \PDO::PARAM_STR);
            $c->bindValue('cpf', $this->cpf, \PDO::PARAM_INT);
            $c->bindValue('email', $this->email, \PDO::PARAM_STR);
            $c->bindValue('telefone', $this->telefone, \PDO::PARAM_STR);
            $c->bindValue('cep', $this->cep, \PDO::PARAM_STR);
            $c->bindValue('rua', $this->rua, \PDO::PARAM_STR);
            $c->bindValue('numero', $this->numero, \PDO::PARAM_STR);
            $c->bindValue('complemento', $this->complemento, \PDO::PARAM_STR);
            $c->bindValue('bairro', $this->bairro, \PDO::PARAM_STR);
            $c->bindValue('cidade', $this->cidade, \PDO::PARAM_STR);
            $c->bindValue('uf', $this->uf, \PDO::PARAM_STR);

            $c->execute();
        } catch (\Exception $e) {
            throw new \Exception("$e");
        }
    }

    // Função para editar o cliente no banco de dados
    public function editarCliente()
    {
        try {
            $c = $this->pdo->prepare("UPDATE `cliente` SET `nome` = :nome, `cpf` = :cpf, `email` = :email, `telefone` = :telefone, `cep` = :cep, `rua` = :rua, `numero` = :numero, `complemento` = :complemento, `bairro` = :bairro, `cidade` = :cidade, `uf` = :uf WHERE `cliente`.`id` = :id;");

            $c->bindValue('id', $this->id, \PDO::PARAM_STR);
            $c->bindValue('nome', $this->nome, \PDO::PARAM_STR);
            $c->bindValue('cpf', $this->cpf, \PDO::PARAM_INT);
            $c->bindValue('email', $this->email, \PDO::PARAM_STR);
            $c->bindValue('telefone', $this->telefone, \PDO::PARAM_STR);
            $c->bindValue('cep', $this->cep, \PDO::PARAM_STR);
            $c->bindValue('rua', $this->rua, \PDO::PARAM_STR);
            $c->bindValue('numero', $this->numero, \PDO::PARAM_STR);
            $c->bindValue('complemento', $this->complemento, \PDO::PARAM_STR);
            $c->bindValue('bairro', $this->bairro, \PDO::PARAM_STR);
            $c->bindValue('cidade', $this->cidade, \PDO::PARAM_STR);
            $c->bindValue('uf', $this->uf, \PDO::PARAM_STR);

            $c->execute();
        } catch (\Exception $e) {
            throw new \Exception("$e");
        }
    }

    // Função que Deleta o Cliente no Banco de Dados
    public function deletaCliente()
    {
        try {
            $c = $this->pdo->prepare("DELETE FROM cliente WHERE id = :id");
            $c->bindValue('id', $this->id, \PDO::PARAM_STR);
            $c->execute();
        } catch (\Exception $e) {
            throw new \Exception("$e");
        }
    }

    // Função que Verifica se já existe o cliente na Base de Dados.
    public function verificaCliente()
    {
        $c = $this->pdo->prepare("SELECT * FROM cliente WHERE cpf = :cpf");
        $c->bindValue('cpf', $this->cpf, \PDO::PARAM_STR);
        $c->execute();
        $v = $c->rowCount();

        return $v;
    }



    // Função que Lista o Cliente para criar a View
    public function listarClientes($inicio, $busca, $buscaColuna, $buscaValor)
    {
        // Faz a configuração da busca
        // Caso não esteja fazendo uma busca exibe a lista normalmente
        if($busca == 0){
            $c = $this->pdo->query("SELECT * FROM cliente LIMIT $inicio, 10");
            // Caso esteja fazendo uma busca faz a Query com Where.
        }else if($busca == 1){
            $c = $this->pdo->query("SELECT * FROM cliente WHERE $buscaColuna LIKE '%$buscaValor%' LIMIT $inicio, 10");
        }
        
        return $c->fetchAll();
    }
    
    // Função para retornar o total exibido na lista.
    public function totalListaCliente($inicio, $busca, $buscaColuna, $buscaValor)
    {
       // Faz a configuração da busca
        // Caso não esteja fazendo uma busca exibe a lista normalmente
        if($busca == 0){
            $c = $this->pdo->query("SELECT * FROM cliente LIMIT $inicio, 10");
            // Caso esteja fazendo uma busca faz a Query com Where.
        }else if($busca == 1){
            $c = $this->pdo->query("SELECT * FROM cliente WHERE $buscaColuna LIKE '%$buscaValor%' LIMIT $inicio, 10");
        }
        
        return $c->rowCount();
    }
    

    public function infosCliente ()
    {
        $c = $this->pdo->prepare("SELECT * FROM cliente WHERE id = :id");
        $c->bindValue("id", $this->id, \PDO::PARAM_STR);
        $c->execute();

        return $c->fetch(\PDO::FETCH_ASSOC);
    }
}
