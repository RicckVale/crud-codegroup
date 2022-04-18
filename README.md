![printScreen](https://i.ibb.co/wSwNDsX/Code-Group-Test.png)
# </> CODEGROUP - TESTE
## Funcionalidades
:heavy_check_mark: `Entidade Cliente:` Criar a Entidade Cliente (Nome, CPF, Email, Telefone, Endereço).
:heavy_check_mark: `Criar Banco de Dados:` Criar Banco de Dados da Entidadade Cliente.
:heavy_check_mark: `Criar Tela 1:` Listar Clientes, Buscar Clientes, Paginação 10/10.
:heavy_check_mark: `Criar Tela 2:` Cadastrar Cliente.
:heavy_check_mark: `Criar Tela 3:` Editar Cliente.
:heavy_check_mark: `Opcional Tests:` Tests Deletar Cliente com PHPUnit.
###

## Ferramentas Utilizadas
:arrow_forward: ``PHP 8.1``
:arrow_forward: ``MySQL 5.6``
:arrow_forward: ``JQuery``
:arrow_forward: ``Boostrap 4``
:arrow_forward: ``PHPUnit``

## Rodando Testes 
Para executar o teste criado basta rodar o seguinte comando no terminal dentro da raiz do projeto:
`.\vendor\bin\phpunit `

## Instalando Banco de Dados e Configurando
Para instalar o Banco de Dados basta criar o Banco de Dados no MySQL e executar o arquivo:
`mysql codegroup.sql `

Para configurar o banco de dados e a conexão com o mesmo edite o arquivo:
`init.php`
