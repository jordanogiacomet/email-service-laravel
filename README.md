# Email Service Laravel

Este repositório contém um projeto simples de envio de e-mails utilizando o framework Laravel. O objetivo é demonstrar a estrutura básica de um aplicativo que envia e-mails, bem como mostrar como fazer testes unitários para verificar o envio dos e-mails.

## Tecnologias Utilizadas

- PHP
- Laravel
- Mockery (para testes)
- Postmark (provedor de e-mail para envio de backup)

## Estrutura do Projeto

O projeto consiste em três partes principais:

1. Controlador `MailController`: Responsável por receber a requisição HTTP de envio de e-mail, validar os campos e chamar o serviço de envio de e-mail.

2. Rotas `web.php`: Define as rotas da aplicação, mapeando as URLs para os métodos do controlador correspondente.

3. Serviço `EmailService`: Encapsula a lógica de envio de e-mails, utilizando a classe `Mail` do Laravel. Também implementa o envio de e-mail de backup utilizando o provedor de e-mail "Postmark".

## Detalhes de Implementação

### Controlador `MailController`

- O controlador `MailController` é responsável por receber a requisição HTTP de envio de e-mail, validar os campos e chamar o serviço de envio de e-mail.
- O método `sendEmail()` recebe a requisição, valida os campos "email" e "text" e, em seguida, chama o método `sendEmail()` do serviço de e-mail para enviar o e-mail.
- Caso o envio seja bem-sucedido, a página é redirecionada de volta para a página de e-mail.

### Rotas `web.php`

- O arquivo `web.php` define as rotas da aplicação, mapeando as URLs para os métodos do controlador correspondente.
- A rota principal ("/") redireciona para a rota "/email", que exibe o formulário de e-mail.
- A rota "/email" retorna a view "email", responsável por exibir o formulário de e-mail.
- A rota "/enviar" é do tipo POST e chama o método `sendEmail()` do controlador `MailController` quando o formulário de e-mail é enviado.

### Serviço `EmailService`

- O serviço `EmailService` encapsula a lógica de envio de e-mails, utilizando a classe `Mail` do Laravel.
- O método `sendEmail()` recebe o destinatário e os dados do e-mail e tenta enviar o e-mail usando a classe `TestEmail`.
- Em caso de exceção, o método `sendEmail()` chama o método `sendEmailBackup()` para enviar um e-mail de backup utilizando o provedor de e-mail "Postmark".
- O método `sendEmailBackup()` envia o e-mail de backup usando o provedor de e-mail "Postmark" e a classe `TestEmail`.

## Testes Unitários

O projeto inclui testes unitários para verificar o envio de e-mails. O arquivo `EmailServiceTest.php` contém o teste `testSendEmail()`, que realiza o seguinte:

- Define o destinatário e os dados para o teste.
- Faz o mock do envio de e-mail.
- Cria uma instância do `EmailService` e chama o método `sendEmail()`.
- Verifica se o e-mail foi enviado corretamente usando a função `assertSent()` do Laravel.

## Executando o Projeto

1. Clone o repositório para sua máquina local.
2. Instale as dependências do projeto executando o comando `composer install`.
3. Configure as variáveis de ambiente do Laravel no arquivo `.env`.
4. Execute o comando `php artisan serve` para iniciar o servidor local.
5. Acesse a aplicação no navegador através da URL fornecida pelo comando anterior.

## Considerações Finais

Este projeto serve como um exemplo básico de envio de e-mails utilizando o Laravel, demonstrando a estrutura do aplicativo, as rotas, o controlador e o serviço responsáveis pelo envio de e-mails. Também inclui testes unitários para verificar o envio dos e-mails. Sinta-se à vontade para explorar o código-fonte e adaptá-lo às suas necessidades.

**Nota:** Certifique-se de configurar corretamente as variáveis de ambiente e as credenciais de e-mail para que o envio de e-mails funcione corretamente.

## Contribuição

Contribuições são bem-vindas! Se você encontrou um bug, tem uma sugestão ou deseja adicionar uma nova funcionalidade, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto é licenciado sob a [MIT License](https://opensource.org/licenses/MIT).
