Projeto criado por mim na participação do Curso DevEvolution promovido pela empresa onde atualmente atuo. 
*IXCSoft*

Esse projeto é muito importante pra mim, por isso irei deixar ele amostra aqui. Lembrando isso é um projeto de um completo iniciante, com cerca de 3 mêses de estudo.
Então apesar de ter sido algo rápido e que nem se compara ao que tenho de conhecimento hoje, isso era algo surreal pra mim, assim como deve ser pra muitos que estão iniciando nos estudos!

## Requisitos

* Docker
* Docker compose

## Docker

Crie um arquivo `.env` com o conte�do de `.env-sample`.

### Buildar os Containers:

`docker-compose up -d --build`

### Parar todos os Containers:

`docker-composer down -v`

### Remover todos os Containers parados:

`docker system prune`

### Acessar o Container do MariaDB e ter acesso ao banco:

`docker exec -it mariadb bash`

### Acessar aplica��o:

`localhost:8888`

# Composer

## Instalar

`docker-compose run --rm php-fpm composer install `

## Requerir pacote:

`docker-compose run --rm php-fpm composer require autor/pacote`
