<?php
include_once __DIR__ .("\..\\vendor\autoload.php");
include_once __DIR__ .("\..\\model\\functions.php");
include_once __DIR__ . "\..\controller\\editarCliente.php";
// Pega o ID para pegar as informações do Cliente. 
if(isset($_GET['id'])){
    $id = limpaString($_GET['id']);
}else{
    $id = "0";
}
$c = new controllerInfosCliente($id);

?>
<div class="form-row">
    <input id="id" name="id" type="hidden" value="<?=$c->getId();?>" required>
    <div class="form-group col-md-12">
        <label for="inputEmail4">Nome Completo</label>
        <input id="nome" name="nome" type="text" class="form-control" value="<?=$c->getNome();?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">CPF</label>
        <input id="cpf" name="cpf" type="text" class="form-control" value="<?=$c->getCpf();?>" onkeypress="$(this).mask('00000000000');" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">E-mail</label>
        <input id="email" name="email" type="email" class="form-control" value="<?=$c->getEmail();?>" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">Telefone</label>
        <input id="telefone" name="telefone" type="text" class="form-control" value="<?=$c->getTelefone();?>" onkeypress="$(this).mask('00 000000000');" readonly>
    </div>
</div>
<div class="form-row" style="padding-top: 20px;"></div>

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="inputEmail4">CEP</label>
        <input id="cep" name="cep" type="text" class="form-control" value="<?=$c->getCep();?>" onblur="pesquisacep(this.value);" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-5">
        <label for="inputEmail4">Rua</label>
        <input id="rua" name="rua" type="text" class="form-control" value="<?=$c->getRua();?>" readonly>

    </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">Nº</label>
        <input id="numero" name="numero" type="text" class="form-control" value="<?=$c->getNumero();?>" readonly>
    </div>
    <div class="form-group col-md-5">
        <label for="inputEmail4">Complemento</label>
        <input id="complemento" name="complemento" type="text" class="form-control" value="<?=$c->getComplemento();?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">Bairro</label>
        <input id="bairro" name="bairro" type="text" class="form-control" value="<?=$c->getBairro();?>" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">Cidade</label>
        <input id="cidade" name="cidade" type="text" class="form-control" value="<?=$c->getCidade();?>"readonly>
    </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">UF</label>
        <input id="uf" name="uf" type="text" class="form-control" value="<?=$c->getUF();?>" readonly>
    </div>
</div>
<input name="ibge" type="hidden" id="ibge" size="8" /></label><br />

<div class="form-row">
    <div class="form-group col-md-12 text-center">
        <a href="index.php?p=editarCliente&id=<?=$c->getId();?>"><button type="submit" class="btn btn-success">Editar Cliente</button></a>
        <a href="controller/excluirCliente.php?id=<?=$c->getId();?>"><button type="submit" class="btn btn-danger">Deletar Cliente</button></a>
    </div>
</div>
</div>