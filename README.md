# models and migrations files creation
php artisan make:model Cars -m -f

# migration
php artisan migrate:refresh --seed
