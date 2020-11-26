## Student Management System

This is simple CRUD Student Management System application.

## Installation

- Create a database locally named ***sms***
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git repository
- Rename .env.example file to .env inside your project root (youd can rename it with this line: ```cp .env.example .env```)
- Edit these .env file parameters (```DB_USERNAME, DB_PASSWORD```)
- Open the console and cd your project root directory
- Run ```composer install``` or ```php composer.phar install```
- Run ```php artisan key:generate```
- Run ```php artisan migrate```
- Run ```php artisan serve```
- Open project through ```http://127.0.0.1:8000```

## Features
- Laravel UI authentication system Register/Login and Logout
- Unregistered users only could see home page with students information
- Registered users will be able to ***create*** new student entry
- Registered users will be able to ***edit*** student entry
- Registered users will be able to ***delete*** student entry

## Screenshots
### Home Page
[![homepage.png](https://i.postimg.cc/bwbqdqYM/homepage.png)](https://postimg.cc/TKRz4MDq)
### Register Page
[![registerpage.png](https://i.postimg.cc/m2Hvy8x1/registerpage.png)](https://postimg.cc/Mvz3W0pz)
### Login Page
[![loginpage.png](https://i.postimg.cc/cLGV9wZ9/loginpage.png)](https://postimg.cc/56p7jHXL)
### Create Page
[![createpage.png](https://i.postimg.cc/P5Gkg0bM/createpage.png)](https://postimg.cc/9rBST8n4)
### Edit Page
[![editpage.png](https://i.postimg.cc/fLqGBPTm/editpage.png)](https://postimg.cc/r0WZpQ4w)