# models and migrations files creation
php artisan make:model Cars -m -f

**Migration**
php artisan migrate:refresh --seed

# Create layout for livewire
###### NB: there is no need to create above since laravel already setup default layouts via layouts/app.blad.php
```php
php artisan livewire:layout
```

# create a compononent to demonstrate how livewire works

```php
php artisan livewire:make TestPage
```
##### the created component act as a controller for the view page
