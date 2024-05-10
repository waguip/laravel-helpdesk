# laravel-helpdesk
Um sistema de gerenciamento de chamados

## Instalação
Utilize o gerenciador de pacotes [composer](https://getcomposer.org/) e [npm](https://www.npmjs.com/) para instalar o Projeto Laravel.
```bash
composer install
npm i
```

Renomeie o arquivo ".env.example" para ".env" e configure sua chave.
```bash
php artisan key:generate
```
Configure o banco no arquivo ".env" (exemplo abaixo) e o crie em sua máquina.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=porta_do_banco
DB_DATABASE=nome_do_banco
DB_USERNAME=username_do_banco
DB_PASSWORD=sennha_do_banco
```

Crie seu banco de dados com base no seu arquivo ".env" e execute as migrações para criar as tabelas no banco de dados.
```bash
php artisan migrate
```

Inicie o server de desenvolvimento npm.
```bash
npm run dev
```

Em outro terminal, inicie a aplicação localmente.
```bash
php artisan serve
```

 ## Diagrama de relacionamentos
 ![image](https://github.com/waguip/laravel-helpdesk/assets/51832038/b936349f-63dd-47f8-bfed-78e9d82a843b)
