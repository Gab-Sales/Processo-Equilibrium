# Equilibrium Web

Descrição básica do que foi feito
Ex:
Esse é um painel administrativo no qual é possível cadastrar usuários e editá-lós.
Se possível, colocar prints também (**ajuda muito**)

## Credênciais de acesso
 * login: admin
 * senha: 123

## Passos para rodar o projeto
### 1º Passo

Com o **composer** devidamente **instalado**
execute este comando no terminal:
```bash
composer install --no-scripts* 
```

### 2º Passo
Copie o arquivo .env.example e renomeie para .env
Para fazer isso, execute este comando no terminal:
```bash
cp .env.example .env
```

### 3º Passo
Crie uma nova chave para a aplicação usando o comando:
```bash
php artisan key:generate
```

### 4º Passo
Crie o banco onde sera executado as migrations 
**por padrão é recomendavel que o apelido do banco seja "laravel"**
executar as migrations:
```bash
php artisan migrate
```

### 5º Passo
Para rodar a aplicação, num servidor php local, execute o comando:
```bash
php artisan serve
```
