#

## Database sqlite configuration

```txt
DB_CONNECTION=sqlite
DB_DATABASE=db.sqlite3
```

```sh
cp .env.example .env
```

```sh
export DATABASE_URL="sqlite:///`pwd`/db.sqlite3"
php artisan migrate 
php artisan serve
```

##  Adding some users with migration

```sh
php artisan make:migration add_some_users
```

```php
 public function up(): void
    {
        User::create(
            array(
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => Hash::make('johnspassword')

            )
        );
        User::create(
            array(
                'name' => 'andrea',
                'email' => 'andrea@gmail.com',
                'password' => Hash::make('andreaspassword')

            )
        );
    }
```

## Movies migration

```sh
php artisan make:migration create_movies_table --table=movies --create
php artisan make:migration add_some_movies
```
