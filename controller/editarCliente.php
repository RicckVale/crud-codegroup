<?php
include_once __DIR__ .("\..\\vendor\autoload.php");
include_once __DIR__ .("\..\\model\\functions.php");

class controllerInfosCliente
{
    private $cliente;
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $cep;
    private $rua;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;


    public function __construct($id)
    {
        $this->cliente = new App\Cliente;
        $this->controllerFunction($id);
    }

    // Cria a função do controlador com o objetivo de abstrair valores do banco de dados
    public function controllerFunction($id)
    {
        $this->cliente->id = $id;
        // Executa a função que puxa os valores do banco de dados
        $c =  $this->cliente->infosCliente();
        // Passa esses valores para o objeto da classe.
        $this->id = $c['id'];
        $this->nome = $c['nome'];
        $this->cpf = $c['cpf'];
        $this->email = $c['email'];
        $this->telefone = $c['telefone'];
        $this->cep = $c['cep'];
        $this->rua = $c['rua'];
        $this->numero = $c['numero'];
        $this->complemento = $c['complemento'];
        $this->bairro = $c['bairro'];
        $this->cidade = $c['cidade'];
        $this->uf = $c['uf'];
    }


    // Cria a função para conseguir abstrair os valores desta classe.
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getUF(){
        return $this->uf;
    }
    
}


// Cria a classe que executa o comando no banco de dados.
class controllerEditarCliente
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
        $this->cliente->id = limpaString($_POST['id']);
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

        // Verifica se alguns dados obrigatórios são Nullos
        if($_POST['nome'] == ""){
            header("Location: ../index.php?p=editarCliente&id=".$_POST['id']."&e=É obrigatório o preenchimento de um Nome!");
            die;
        }
        if($_POST['email'] == ""){
            header("Location: ../index.php?p=editarCliente&id=".$_POST['id']."&e=É obrigatório o preenchimento de um E-Mail!");
            die;
        }
        if($_POST['cep'] == ""){
            header("Location: ../index.php?p=editarCliente&id=".$_POST['id']."&e=É obrigatório o preenchimento de um CEP!");
            die;
        }
        if($_POST['rua'] == ""){
            header("Location: ../index.php?p=editarCliente&id=".$_POST['id']."&e=É obrigatório o preenchimento de um Rua!");
            die;
        }

        // Se o CPF não for cadastrado ele inclui o cliente na Base de Dados.
        $this->cliente->editarCliente();
        //Redireciona de volta para a página de cadastrado informando o cadastro.
        header("Location: ../index.php?p=verClientes&s=Cliente Editado com Sucesso.");
    }
}
// Caso a execução esteja sendo chamada via o GET ele executa a edição. 
if(isset($_GET['s'])){
new controllerEditarCliente();
}
