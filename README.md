<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://user-images.githubusercontent.com/68366048/115306700-7e25a880-a168-11eb-96f8-25089d7af368.png" width="400"></a></p>

## About Laragram

Laragram is a simple instagram "clone" built with **[Laravel](https://laravel.com/)** and **[
Tailwind CSS](https://tailwindcss.com/)** that gives to the users
the ability to create or edit their own profiles (including profile image and description), upload images and share them among friends

## Requirements

-   PHP v8.0.3
-   NodeJS v14.16.0
-   Composer v2.0.11
-   MySQL/PostgreSQL/SQLite

## Setting Up The Enviroment

```
git clone https://github.com/GiannisGialamas/Laragram.git
cd Laragram
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
php artisan serve
```

## Screenshots

![Screenshot_9](https://user-images.githubusercontent.com/68366048/115310154-a2d04f00-a16d-11eb-9165-62aa6090b90e.png)

![Screenshot_8](https://user-images.githubusercontent.com/68366048/115310264-d0b59380-a16d-11eb-8f90-5a348b86afea.png)

![Screenshot_6](https://user-images.githubusercontent.com/68366048/115310334-edea6200-a16d-11eb-95ed-3781df4315cc.png)

## License

Laragram free and open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
