<?php
include_once __DIR__ . ("\..\\vendor\autoload.php");
include_once __DIR__ . ("\..\\model\\functions.php");

class controllerListarCliente
{
    private $cliente;
    public $page;

    public function __construct($page)
    {
        $this->cliente = new App\Cliente;
        $this->controllerFunction($page);
    }

    public function controllerFunction($page)
    {
        $page = limpaString($page);
        $page = $page * 10;

        $clientes = $this->cliente->listarClientes($page);

        foreach ($clientes as $c) {
            
            // Lista os clientes na página com o Drop de Ações.
            echo ('
            <tr>
            <th scope="row">' . $c['nome'] . '</th>
            <td>' . $c['cpf'] . '</td>
            <td>' . $c['email'] . '</td>
            <td>' . $c['cidade'] . '/' . $c['uf'] . '</td>
            <div class="dropdown">
            <td><div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="drop'.$c['id'].'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ação
            </button>
            <div class="dropdown-menu" aria-labelledby="drop'.$c['id'].'">
              <a class="dropdown-item" href="#">Visualizar</a>
              <a class="dropdown-item" href="index.php?p=editarCliente&id='.$c['id'].'">Editar</a>
              <a class="dropdown-item bg-danger text-white" href="controller/excluirCliente.php?id='.$c['id'].'">Deletar</a>
            </div>
          </div></td>
            </tr>
            ');

        }
    }
}
