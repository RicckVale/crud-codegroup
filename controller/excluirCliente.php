<?php
include_once __DIR__ .("\..\\vendor\autoload.php");
include_once __DIR__ .("\..\\model\\functions.php");

class controllerDeletaCliente
{
    private $cliente;

    function __construct($id)
    {
        $this->cliente = new App\Cliente;
        $this->controllerFunction($id);
    }

    function controllerFunction($id){
        $this->cliente->id = $id;
        $this->cliente->deletaCliente();
        header("Location: ../index.php?p=verClientes&s=Cliente Deletado com Sucesso.");
    }
}

if(isset($_GET['id'])){
    $id = limpaString($_GET['id']);
    
    new controllerDeletaCliente($id);
}