<?php
include_once __DIR__ .("\..\\vendor\autoload.php");
include_once __DIR__ .("\..\\model\\functions.php");

class controllerInserirCliente
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new App\Cliente;
        $this->controllerFunction();
    }

    public function controllerFunction()
    {
        // Lista os dados enviados pelo formulário
        $this->cliente->nome = limpaString($_POST['nome']);
        $this->cliente->cpf = limpaString($_POST['cpf']);
        $this->cliente->email = limpaString($_POST['email']);
        $this->cliente->telefone = limpaString($_POST['telefone']);
        $this->cliente->cep = limpaString($_POST['cep']);
        $this->cliente->rua = limpaString($_POST['rua']);
        $this->cliente->numero = limpaString($_POST['numero']);
        $this->cliente->complemento = limpaString($_POST['complemento']);
        $this->cliente->bairro = limpaString($_POST['bairro']);
        $this->cliente->cidade = limpaString($_POST['cidade']);
        $this->cliente->uf = limpaString($_POST['uf']);

        // Verifica se já tem o CPF do cliente na Base de Dados.
        $verifica = $this->cliente->verificaCliente();

        if ($verifica >= 1) {
            header("Location: ../index.php?p=cadastrarCliente&e=CPF Já Cadastrado");
            die;
        }

        // Se o CPF não for cadastrado ele inclui o cliente na Base de Dados.
        $this->cliente->incluirCliente();
        //Redireciona de volta para a página de cadastrado informando o cadastro.
        header("Location: ../index.php?p=cadastrarCliente&s=Cliente Cadastrado");
    }
}

new controllerInserirCliente();
