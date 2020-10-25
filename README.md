<p align="center"><img src="https://wdfiles.ru/plugins/imageviewer/site/direct.php?s=rOnI&/expo_logo_8k55.png" width="400"></p>


## About ncfu

Автоматизированная платформа по трудоустройству и предоставлению стажировок для студентов. В основу данной платформы заложена возможность детального описания резюме студентов, с предоставлением подробной информации об их деятельности и возможностью прикрепить сертификаты и дипломы. 

- JavaScript
- Node.js
- PHP
- Laravel
- Docker-compos
- PostgreSQL
- Nginx
- Laravel UI


## Запуск проекта

1. Клонируйте репозиторий настроенного для запука под Windows проекта laradock. <a href="https://github.com/khamsolt/laradock">khamsolt/laradock</a>
    - `git clone https://github.com/khamsolt/laradock`
2. Перейдите в репозиторий клоинрованного laradock и соберите docker
    - `docker-compose build nginx php-fpm postgres workspace`
3. После сборки docker, поднимите его
    - `docker-compose up -d nginx php-fpm postgres workspace`
    4. Убедитесь в успешном поднятии проекта 
        `docker-compose ps`
        5.  В сдучае ошибок можно ввести `docker-compose up -d postgres`
4. Клонируйте (желательно рядом с laradock) проект сайта СКФУ из репозитория <a href="http://github.com/khamsolt/ncfu">khamsolt/ncfu</a>
    - `git clone git clone https://github.com/khamsolt/ncfu.git`
5. Создайте базу данных и пользователя PostgreSQL внутри laradock
    - `docker-compose exec postgres psql -U default`
    - PostgresSQL -
        - `create database ncfu_db;`
        - `create user expovision with encrypted password 'expovision';`
        - `grant all privileges on database ncfu_db to expovision;`
6. Запустите установку зависимостей проекта laravel
    - `docker-compose exec -u laradock workspace bash`
        - `cd laradock`
        - `composer update`
        - `npm i`
7. Запустите миграции БД laravel проекта
    - `php artisan migrate`
