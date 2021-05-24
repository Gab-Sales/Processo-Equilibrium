## Instruções para executar o projeto localmente

## Step one
com o composer devidamente instalado
executar este comando no terminal:
composer install --no-scripts

## Step two
Copie o arquivo .env.example
copiando e colando ou executando este comando no terminal:
cp .env.example .env

## Step three
Crie uma nova chave para a aplicação usando o comando:
php artisan key:generate

## Step four
criar o banco onde sera executado as migrations (por padrão é recomendavel que o apelido do banco seja "laravel")
executar as migrations:
php artisan migrate

## Step five
execute o comando no seu terminal:
php artisan serve
