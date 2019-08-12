# AppCliente 

## Objetivo 
Tela simples de cadastro de usuários, podendo adicionar e gerenciar telefones de cada usuário. 
A fim de utilizar MVC na pratica com Laravel, de modo simples e introdutório. 

## Recursos necessários que foram utilizados no projeto 
* MariaDB 
* Laravel 
* Composer 

## Dicas para instalar 
Instalar MariaDB no Ubuntu: *https://linuxize.com/post/how-to-install-mariadb-on-ubuntu-18-04/*  
Instalar Composer: *https://www.digitalocean.com/community/tutorials/como-instalar-e-usar-o-composer-no-ubuntu-18-04-pt*  
Instalar Laravel: *https://laravel.com/docs/5.8/installation*  

## Como rodar projeto 
* Com o MariaDB ou MySQL instalado, crie um novo schema (base de dados) para o projeto (utilizei MySQL Workbench para facilitar a criação) 
* Em seguida, clone o repositório para sua maquina 
* Copie o arquivo .env.example com o nome de .env 
* Edite as variáveis de Banco de Dados do arquivo .env (IP, porta, login, senha) 
* Na pasta do projeto, rode os seguintes comandos 
*composer install* 
*php artisan migrate --seed* 
* Suba o projeto com o comando 
*php artisan serve* 
* Acesse o projeto via web, geralmente em http://localhost:8000
