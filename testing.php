<?php

$string = 'http://127.0.0.1/app/laravel/images/admin/article/slug';
$explode = explode('/images/', $string);
$last = 'https://cdn.prod.www.spiegel.de/images/'.end($explode);
print_r($last);




?>


- PHPMYADMIN LOGIN ERROR
Since our container for database is named db
 *1st we need to login as a root user by running this command below
           - docker compose exec db mysql -u root -p
           * We will get logged in using password set in docker-compose.yml which is
                          - MYSQL_ROOT_PASSWORD: (Whatever you set here)
  * Note root user already created news as the database
   ** Then we create a user to avoid using our root user and give all priviledges
           - CREATE USER 'laraveluser'@'localhost' IDENTIFIED BY 'B1a84@0No*6Y';
           - GRANT ALL PRIVILEGES ON news.* TO 'laraveluser'@'localhost';
           - FLUSH PRIVILEGES;
           - exit;


docker compose build --no-cache && docker compose up --force-recreate -d
docker compose down
docker compose up --force-recreate -d --remove-orphans
docker compose up -d --remove-orphans

delete all unused images

docker system prune -a

docker compose exec lara php artisan config:clear

