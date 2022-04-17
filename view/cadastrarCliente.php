<?php
?>

<form method="post" action="controller/inserirCliente.php">
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="inputEmail4">Nome Completo</label>
        <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome Completo" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">CPF</label>
        <input id="cpf" name="cpf" type="text" class="form-control" placeholder="00000000000" onkeypress="$(this).mask('00000000000');" required>
        <span class="text-muted" style="padding-left: 5px;"><small>Somente Números</small></span>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">E-mail</label>
        <input id="email" name="email" type="email" class="form-control" placeholder="e@e.com" required>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">Telefone</label>
        <input id="telefone" name="telefone" type="text" class="form-control" placeholder="00 00000000" onkeypress="$(this).mask('00 000000000');" require>
        <span class="text-muted" style="padding-left: 5px;"><small>Somente Números</small></span>
    </div>
</div>
<div class="form-row" style="padding-top: 20px;"></div>

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="inputEmail4">CEP</label>
        <input id="cep" name="cep" type="text" class="form-control" placeholder="00000000" onblur="pesquisacep(this.value);" required>
        <span class="text-muted" style="padding-left: 5px;"><small>Somente Números</small></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-5">
        <label for="inputEmail4">Rua</label>
        <input id="rua" name="rua" type="text" class="form-control" placeholder="Rua" required>

    </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">Nº</label>
        <input id="numero" name="numero" type="text" class="form-control" placeholder="000" required>
    </div>
    <div class="form-group col-md-5">
        <label for="inputEmail4">Complemento</label>
        <input id="complemento" name="complemento" type="text" class="form-control" placeholder="">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">Bairro</label>
        <input id="bairro" name="bairro" type="text" class="form-control" placeholder="Bairro" required>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">Cidade</label>
        <input id="cidade" name="cidade" type="text" class="form-control" placeholder="Cidade" required>
    </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">UF</label>
        <input id="uf" name="uf" type="text" class="form-control" placeholder="XX" required>
    </div>
</div>
<input name="ibge" type="hidden" id="ibge" size="8" /></label><br />

<div class="form-row">
    <div class="form-group col-md-12 text-center">
        <button type="submit" class="btn btn-success">Cadastrar Cliente</button>
    </div>
</div>
</div>
</form>