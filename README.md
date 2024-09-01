# models and migrations files creation
php artisan make:model Cars -m -f

**Migration**
php artisan migrate:refresh --seed

# Create layout for livewire
```php
php artisan livewire:layout
```
###### NB: there is no need to create above since laravel already setup default layouts via layouts/app.blad.php

# create a compononent to demonstrate how livewire works
## the created component act as a controller for the view page
```php
php artisan livewire:make TestPage
```
