# WP Plugin Boilerplate

Estrutura para criação de plugins WordPress

## Descrição

O projeto WP Plug-in Boilerplate tem como objetivo fornecer uma estrutura base para a criação de outros pluginz, trazendo automações e funcionalidades essenciais para garantir a qualidade de um plugin WordPress como Testes Unitários, PHPCS, minificação e concatenação de assets, otimização de imagens entre outros.

O WP Plug-in Boilerplate trás uma estrutura de arquivos base, mas você pode ficar a vontade para modificar de acordo com suas necessidades. Por padrão temos um diretório `public` onde devem ficar as classes e assets relacionadas a área pública, ou seja, aquela que o usuário final acessa e um diretório `admin` para as coisas relacionadas a área administrativa.

Além disso temos também o arquivo principal, que por padrão vem com o nome `plugin-name.php` mas que deve ser renomeado, que trás a base do plugin e carregamento de Text Domain, scripts JS e estilos para as duas áreas. Você pode adicionar hooks ao construtor da classe principal e escrever seus métodos neste arquivo se achar que faz sentido, porém se quiser uma melhor divisão/ organização é recomendado que utilize os diretórios `public` e `admin`.

## Pré requisitos?

1. Instalação do [gulp](https://www.npmjs.com/package/gulp) global
2. Instalação do [PHPCS](https://docs.wpvip.com/how-tos/php_codesniffer/) global

## Como usar?

1. Cloone o repositório para dentro da pasta `wp-content/plugins` do seu projeto;
2. Renomeie o diretório para o nome do seu plugin;
3. Renomeie o arquivo `plugin-name.php` para o nome do seu plugin;
4. Abra o arquivo renomeado do item 3 e edite alterando o nome da classe, a instância dela na ultima linha e todos os dados comentados no topo para que nome, descrição e outras informações do seu plugin façam sentido;
5. Execute `composer install` para baixar dependências PHP;
6. Execute `npm install` para baixar dependências de automação;
7. Be happy :)

## Automações

Build: `npm run build`  
Se tudo correu bem, executando o comando acima o sistema vai concatenar, minificar e gerar um novo arquivo CSS e JS, além de otimizar as imagens.

PHPCS: `npm run phpcs`  
Se tudo correu bem, executando o comando acima o sistema vai executar o PHPCS nos arquivos do plugin.

Testes unitários: `npm run test`  
Se tudo correu bem, executando o comando acima o sistema vai executar os testes unitários. Os testes utilizam o framework [Pest PHP](https://pestphp.com/) que utiliza o [PHP Unit](https://phpunit.de/), para saber mais consulte a documentação deles.

## Como contribuir

Você pode contribuir de diversas formas, todas elas nos deixariam muito felizes, então da uma olhada abaixo e se achar que consegue contribuir de uma forma não listada pode entrar em contato conosco.

1. Clone o repositório do projeto
2. Crie uma branch seguindo o padrão `feature/minha-funcionalidade` ou `hotfix/fix-helper-post-type`
3. Abra um PR