<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Sistema de gerenciamento de chamados - helpdesk

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

# Diagrama de entidade e relacionamento do banco de dados
<p align="center"><img src="https://github.com/waguip/laravel-helpdesk/assets/51832038/695f9d96-eddb-4ad0-bd80-298f548f50d9" width="500" alt="Diagrama ER do banco de dados plss"></a></p>

# Telas de usúario

## Página Inicial
A página inicial do sistema mostra algumas métricas dos dados.
![Home](https://github.com/waguip/laravel-helpdesk/assets/51832038/59db9d99-001d-4cec-8bb1-08ab01a59cf4)

## Página de chamados
### Visualização dos chamados criados
![Chamados.index](https://github.com/waguip/laravel-helpdesk/assets/51832038/6ca69519-c1be-4073-be9d-3da7548a2875)

### Criação de novo chamado
![Chamados.create](https://github.com/waguip/laravel-helpdesk/assets/51832038/6c633dd9-1286-4869-8be4-82ee320856e8)

# Telas de admin

## Página Inicial
Gerenciamento de chamados com opções para alterar situação ou deletar chamado
![Admin.index](https://github.com/waguip/laravel-helpdesk/assets/51832038/4f516f29-ea94-491b-a559-11bbe0d2b566)

## Página de categorias
Tela onde o admin cria ou deleta categorias
![Categorias.index](https://github.com/waguip/laravel-helpdesk/assets/51832038/fa64d681-f272-4111-bf25-17c73ebf9289)
