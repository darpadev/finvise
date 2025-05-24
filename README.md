<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project Installation

 1. Clone this repository into your local environment
 2. Open the project directory `cd finvise`
 3. Install the project's dependency using the `composer install` command
 4. Execute the `php artisan key:generate`
 5. Make a copy of the `.env.example` file and rename it to `.env`
 6. Change the database section within the `.env` file
 7. Run the `php artisan migrate:fresh --seed`
 
After the project installation is completed, you will have 100 data in the `Products` table and also 11 data of `Users`.

To test the `Login` feature, you can use the following credentials:
> test@example.com | `password`

## What's being used in this project

1. Laravel 10
2. Laravel Breeze
3. Tailwind CSS
