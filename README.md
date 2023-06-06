# React Bakend news-aggregator

## Installation

* clone this project into your machine
    ```
    git clone https://github.com/KimelirR/backend-laravel-api.git
    ```
* clone this project into your machine
    ```
    cd backend-laravel-api
    ```
* Dockerize
    ```
    docker-compose up -d
    ```
        
* Database Migrate on docker
    ```
    docker-compose exec news-api-laravel ./artisan migrate --seed
    ```
* Run  Server
    ```
    docker-compose exec news-api-laravel ./artisan serve
    ```


* Run the application and on your Browser run .
```php
 http://localhost:8000
```

* Load newsapidata to our database by refreshing code below.

```
 http://localhost:8000/api/fetchnewsapi
```

* Load fetchthegurdian to our database by refreshing code below.

```
 http://localhost:8000/api/fetchthegurdian
```

* Load fetchnewyorktimes to our database by refreshing code below.

```
 http://localhost:8000/api/fetchnewyorktimes
```

> End


Then, on the other way manually

** Install project dependencies

  ```php
    composer install
  ```
  
* Copy .env.example
        ```php
        cp .env.example .env
        ```
        
* Generate key for laravel new application you have installed.
    ```php
    php artisan key:generate
    ```

* Change your database credentials

* Run the application 
```
php artisan migrate:fresh --seed
```

* Run the application 
```
php artisan serve
```


* Load newsapidata to our database by refreshing code below.

```
 http://localhost:8000/api/fetchnewsapi
```

* Load fetchthegurdian to our database by refreshing code below.

```
 http://localhost:8000/api/fetchthegurdian
```

* Load fetchnewyorktimes to our database by refreshing code below.

```
 http://localhost:8000/api/fetchnewyorktimes
```


> Or import news_aggregator.sql database to the database and run

 * The Frontend Image

    ![alt text](https://github.com/KimelirR/backend-laravel-api/blob/master/public/images/newsaggregator.png?raw=true)

