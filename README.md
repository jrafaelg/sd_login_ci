# SD_LOGIN CodeIgniter 4 Application

## O que é este projeto
Proposta de um aplicativo de blog para o Projeto Integrador do 3º período do Curso de Técnico em Informática do Instituto Federal de São José do Rio Preto/SP

Trata-se de um blog simples, com editor richtext para as postagens, com sistema de permissões, roles, assinatura digital para as postagens, 2FA, e códigos de recuperação.

Também possui rotas protegidas e comentários nas postagens.

Foi utilizado o framework CodeIgniter 4. Mais informações no [site oficial](https://codeigniter.com).

O banco de dados utilizado é o SQlite.





## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
