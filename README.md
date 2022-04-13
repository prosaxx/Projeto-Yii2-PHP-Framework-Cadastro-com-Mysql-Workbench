# Projeto-Yii2-PHP-Framework-Cadastro-com-Mysql-Workbench
Um projeto Yii2 PHP Framework Cadastro com Mysql Workbench

-------------------------------------------------------------------------------
Projeto criado para realizar um CRUD em PHP junto com MySQL Workbench
-------------------------------------------------------------------------------
-------------------------------------------------------------------------------

Nesse projeto temos um Cadastro para criar, buscar, alterar e deletar um cadastro no banco de dados Mysql Workbench, as pesquisas podem ser feitas pelo CPF, Nome ou Data de Nascimento. Na página temos a quantidade de cadastros realizados.


Ferramentas utilizadas:
WampServer - Servidor Apache com banco de dados PHP e MySQL
https://www.wampserver.com/en/

Composer - Ferramenta de carregamento automático para bibliotecas via terminal
https://getcomposer.org/

MySQL Workbench - Banco de dados para armazenamento e manipulação de dados
https://www.mysql.com/products/workbench/

PhpStorm - IDE utilizada para programação PHP
https://www.jetbrains.com/pt-br/phpstorm/

Yii2 PHP Framework - É um framework em PHP que utiliza componentes para o desenvolvimento de aplicações Web.
https://www.yiiframework.com/doc/guide/2.0/en/start-installation

-------------------------------------------------------------------------------
WampServer deve estar funcionando.

Instale o Composer com PHP versão  superior ou igual a 7 para subir esse projeto.

Banco de dados - campo CPF definido como UNIQUE para não duplicar valor.

Configurando o Yii2 dentro da pasta desejada do projeto - Via Composer faça: create-project --prefer-dist yiisoft/yii2-app-basic nomeprojeto 
click em Enter - abra o projeto

Para rodar a aplicação web via Composer dentro do caminho basic>yii serve
Abrir endereço via Browser -  http://localhost:8080/

Configuração Banco de dados - abra o caminho config/db.php na IDE PHPStorm e configure o banco com os dados.

Criando o CRUD com o Gii - http://localhost:8080/index.php?r=gii para gerar as Models e o CRUD pelo GENERATE



