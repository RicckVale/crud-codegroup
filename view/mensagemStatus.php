<div class="col-12">
    <?php
    // Mensagens de Sucesso e Erro por Sessão para Facilitar o Envio de Mensagens ao Usuário
    if (isset($_GET['s'])) {
        $mensagem = strip_tags($_GET['s'], '<b><strong>');
        echo "<div class='alert alert-primary' role='alert'>$mensagem</div>";
    }
    if (isset($_GET['e'])) {
        $mensagem = strip_tags($_GET['e'], '<b><strong>');
        echo "<div class='alert alert-danger' role='alert'>$mensagem</div>";
    }
    ?>
</div>