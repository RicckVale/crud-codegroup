<?php
include_once __DIR__ . ("\..\\vendor\autoload.php");
include_once __DIR__ . ("\..\\model\\functions.php");
include_once __DIR__ . "\..\controller\listarCliente.php";

if (isset($_GET['page'])) {
  $page = limpaString($_GET['page']);
} else {
  $page = 0;
}

$proxPagina = $page + 1;
$anteriorPagina = $page - 1;
?>
<form method="get" action="">
  <div class="form-row">
    <input id="p" name="p" type="hidden" value="verClientes" required>
    <input id="busca" name="busca" type="hidden" value="1" required>
    <div class="form-group col-md-5 text-left"></div>
    <div class="form-group col-md-1 text-right ">Busca:</div>
    <div class="form-group col-md-2 text-left">
      <select class="form-control" id="tipo" name="tipo">
        <?php if (isset($_GET['tipo'])) {
          $tipo = limpaString($_GET['tipo']);
          echo ('<option value="' . $tipo . '">' . mb_strtoupper($tipo) . '</option>');
        } ?>
        <option value="cpf">CPF</option>
        <option value="nome">Nome</option>
        <option value="cidade">Cidade</option>
        <option value="uf">Estado</option>
      </select>
    </div>
    <div class="form-group col-md-3 text-right">
      <input id="v" name="v" type="text" class="form-control" <?php if (isset($_GET['v'])) {$v = limpaString($_GET['v']);echo ('value="' . $v . '"');} ?> required>
    </div>
    <div class="form-group col-md-1 text-right">
      <button class="btn btn-primary" type="submit">Buscar</button>
</form>
</div>

</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Cidade/Estado</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_GET['busca'])) {
      $tipo = limpaString($_GET['tipo']);
      $v = limpaString($_GET['v']);
      $l = new controllerListarCliente($page, 1, $tipo, $v);
      $totalLista = $l->getTotalLista();
    } else {
      $l = new controllerListarCliente($page, 0, "", "");
      $totalLista = $l->getTotalLista();
    }
    ?>
  </tbody>
</table>
<?php
echo ('<div class="form-row">');
// Paginação dos Usuários
// Impede que o botão Voltar Página seja exibido na primeira página.
if ($page >= 1) {
  // Faz a configuração da Busca no botão de Página Anterior:
  if (isset($_GET['busca'])) {
    $tipo = limpaString($_GET['tipo']);
    $v = limpaString($_GET['v']);

    $busca = "&busca=1&tipo=$tipo&v=$v";
  }else{
    $busca = "";
  }
  echo ('
      <div class="form-group col-md-6 text-left">
      <a href="index.php?p=verClientes&page=' . $anteriorPagina . '' . $busca . '">
        <button type="button" class="btn btn-outline-primary"><< Voltar Página</button>
      </a>
    </div>');
} else {
  echo ('<div class="form-group col-md-6 text-left"></div>');
}

if ($totalLista >= 10) {

  // Faz a configuração da Busca no botão de Próxima Página:
  if (isset($_GET['busca'])) {
    $tipo = limpaString($_GET['tipo']);
    $v = limpaString($_GET['v']);

    $busca = "&busca=1&tipo=$tipo&v=$v";
  }else{
    $busca = "";
  }
  echo ('
    <div class="form-group col-md-6 text-right">
      <a href="index.php?p=verClientes&page=' . $proxPagina . '' . $busca . '">
        <button type="button" class="btn btn-outline-primary">Próxima Página >></button>
      </a>
    </div>
     ');
} else {
  echo ('<div class="form-group col-md-6 text-left"></div>');
}
?>
</div>