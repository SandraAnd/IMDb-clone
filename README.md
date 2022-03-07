<p align="center"><img src="https://user-images.githubusercontent.com/90846771/156734726-a6a77305-4cda-44f1-86de-0c23b0083555.png"></p>




## U05-IMDb-clon-Grupp2
IMDb (International Movie Database)-inspired website created by team 2 at FWD21 program at Chas Academy

## Introduction
The project's aim is to create a complete dynamic website by using the framework Laravel and accessing a database using PHP. The project is a simplified clone of the popular website IMDb. The website can be visited without registration or logging in, but the functionalities available for a visitor are limited to being able to access information about different movies (movie description, rating, reviews, etc.). The login and registration functionalities allow the users to get access to more functionalities, such as creating reviews and lists based on user's preference in movies. The admin of the website has access to the most advanced functionalities, such as, for instance, editing or deleting movies. The implementation of CRUD has been a crucial part of creating the project.

<!-- The project is letting a user registrate and create lists based on their preference in movies. As an admin there is other functionality involved such as updating or deleting a movie. -->

## Built With
- Laravel 9
- MySQL database
- PHP
- JavaScript
- Bootstrap 5
- OwlCarousel 2

## Setup
1. Clone the repository
2. Run the `composer install` command in the root directory of the project in order to install the required dependancies
3. Create the .env file and configure the database
  ```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_user_name
DB_PASSWORD=database_password
   ```

4. Install Laravel/UI
  ```sh
  composer require laravel/ui
  ```

5. Run npm install && npm run dev command
  ```sh
npm install && npm run dev
  ```

6. Migrate & Serve
  ```sh
php artisan migrate
```
   ```sh
php artisan serve
  ```
5. Run the `php artisan db:seed` command in order to seed the database with dummy data


## Acknowledgements
- https://fontawesome.com/
- https://tenor.com/
- https://laracasts.com/series/laravel-8-from-scratch

## License
The Laravel framework is open-source software licensed under the MIT license. 
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center"><img src="https://user-images.githubusercontent.com/90846771/156632535-55ba7b31-a3e4-464a-bb29-1a7d32ebcd6b.gif" alt="[tenor]"></p>

