
# ***Laravel 7 CRUD***



## Installation

Clone the repository:

```
git clone https://github.com/hamzaDAf/laravel-7-CRUD.git
```

### Then cd into the folder with this command:

```
cd laravel-7-CRUD
```

### Then install project's dependencies:

```
composer install
```

### Create a environment file:

```
cp .env.example .env
```

### Generate application key:

```
php artisan key:generate
```

### Create your database and add it to .env file :

```
DB_DATABASE=laravel-7-crud
```

### Run laravel migration :

```
php artisan migrate
```

### Run laravel seeders :
```
php artisan db:seed
```

## Run server

### Run server using this command:

```
php artisan serve
```

## License

The Laravel-7-CRUD is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
