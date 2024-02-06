composer i
php artisan key:generate
configure .env file (database, JWT_SECRET)
php artisan migrate --seed
php artisan jwt:secret
run crone
