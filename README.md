## Run

```
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan migrate:refresh --seed
```

## Get

```
http://localhost
```
