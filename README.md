# HOW To RUN

## requirements
- php 7.4 or newer
- composer php
- database

## steps first install
- clone this repo "git clone https://github.com/uloydev/brin.git"
- navigate to brin dir "cd brin"
- install dependencies "composer install"
- copy file .env.example to .env
- edit database details with your own db in .env file
- run command "php artisan generate:key"
- run command "php artisan migrate --seed"
- run command "php artisan storage:link"
- run command "php artisan serve"
- open http://localhost:8000 in browser

## steps to update code
- open project dir in cmd
- run command "git pull"
- run command "php artisan migrate:fresh --seed"
- run command "php artisan serve"
- open http://localhost:8000 in browser