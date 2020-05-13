cd `dirname $0`/..

cp .env.example .env

composer install

php artisan migrate

php artisan storage:link
