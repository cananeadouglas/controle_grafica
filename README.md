Maiores informações - controle de Gráfica:

para que não tenhamos problemas podemos executar somente o comando:

$ docker-compose up -d

é um projeto de cadastro de whatsapp com cupons pre-configurados. Ao qual se faz uma contagem de números de whatsapp. Feito em PHP e Mysql.

Delícias da Dany - Nginx, PHP, MySql e Phpmyadmin.

Acessar docker.localhost (como descrito no arquivo site.conf)

baixar com o git clone o repositório do projeto e colocar dentro da pasta www/

docker.localhost/nome_do_seu_repositorio_php

2 formas de entrar com o banco. pelo terminal bash e pelo DBeaver CE. baixado pela loja da microsoft.

Resumo de como entrar no mysql.

FOI ADICIONADO O CONTAINER PHPMYADMIN EXPONDO A PORTA 8081 root root conforme descrito no arquivo YML docker-compose.

Para verificar se o servidor MySQL está rodando corretamente e possui a base“teste”criada, vamos acessar esse container via bash com o seguinte comando:

$ docker-compose exec db bash

Lembrando: No Linux é necessário rodar o comando com sudo no início.

Após rodar esse comando você está no bash do container onde o MySQL está rodando, agora vamos acessar o MySQL com usuário root e senha root que definimos no arquivo docker-compose.yml com o seguinte comando:

$ mysql -u root –p

root
root

Após rodar esse comando você vai estar logado no MySQL com usuário root e pode ver as bases criadas, para isso basta executar o seguinte comando:

$ show databases;

Com isso, será mostrada todas as bases criadas, entre elas deve existir a base chamada teste.

Perfeito, agora temos o servidor Nginx rodando com PHP e o MySQL, já podemos criar um script em PHP para se conectar a base teste e verificar se está tudo funcionando corretamente.

podemos acessar também o phpmyadmin

http://localhost:8081/ 

root
root

Para testar a conexão, primeiro precisamos instalar a extensão PDO para MySQL no PHP pois essa não vem configurado por padrão, é possível definir a instalação dessa extensão no arquivo Dockerfile para que seja instalada já no primeiro build do serviço, como nesse post não iremos abordar o arquivo Dockerfile, vamos realizar essa instalação de forma manual com um comando, para isso vamos executar o seguinte comando no diretório de nosso projeto:

$ docker exec -it php-fpm docker-php-ext-install pdo pdo_mysql

$ docker-compose exec php docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

docker-compose restart