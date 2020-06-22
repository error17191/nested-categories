## Notice
I know the task was supposed to be in another framework. But Actually I have no experience in it. I don't mind learning it while working but for that task I had like less than 1 Hour to complete it as I am so busy these days that's why I chose to use someting that I am familiar with to do it quickly and If okay I can learn whatever tools you need while working ISA.



## Setup

- Clone the repo
- Run `composer install`
- Run `cp .env.example .env`
- Change the database config values in .env to match your environment.
- Run `php artisan key:gen`
- Run `php artisan migrate --seed`
- Now the project is ready with some seeded data to start with.
- Run `php artisan serve` to quickly preview it without web server. 

#### Where is the code for the task?
If you are not familiar with Laravel structure, Here's where you can find the backend and frontend code

- app/Http/Controllers/CategoriesController
- resources/views/home.blade.php
- resources/js/app.js -> which is compiled to public/js/app.js
