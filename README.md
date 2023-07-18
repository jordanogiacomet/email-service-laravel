# Email Service Laravel

Este é um projeto de exemplo que demonstra um serviço de envio de e-mails utilizando o framework Laravel.

## Requisitos

- PHP 7.4 ou superior
- Composer

## Instalação

1. Clone o repositório ou faça o download do código-fonte.
2. Na pasta raiz do projeto, execute o comando `composer install` para instalar as dependências do Laravel.
3. Crie um banco de dados MySQL e configure as credenciais de acesso no arquivo `.env`.
4. Execute o comando `php artisan migrate` para criar as tabelas necessárias no banco de dados.
5. Execute o comando `php artisan serve` para iniciar o servidor de desenvolvimento.

## Uso

- Acesse a aplicação no navegador através da URL `http://localhost:8000`.
- Preencha o formulário de e-mail com o destinatário e a mensagem desejada.
- Clique em "Enviar" para enviar o e-mail.
- O sistema tentará enviar o e-mail utilizando o provedor padrão. Em caso de falha, ele tentará novamente usando um provedor de backup.

## Testes

Para executar os testes automatizados, execute o comando `php artisan test`.

## Contribuição

Contribuições são bem-vindas! Se você encontrou um bug, tem uma sugestão ou deseja adicionar uma nova funcionalidade, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto é licenciado sob a [MIT License](https://opensource.org/licenses/MIT).
