<?php
include_once __DIR__ . "\..\controller\listarCliente.php";
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">E-mail</th>
      <th scope="col">Cidade/Estado</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   new controllerListarCliente(0); 
   ?>
  </tbody>
</table>