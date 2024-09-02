# Basics

## models and migrations files creation
```php
php artisan make:model Cars -m -f
```

## Migration
```php
php artisan migrate:refresh --seed
```

## Create layout for livewire

###### NB: there is no need to create above since laravel already setup default layouts via layouts/app.blad.php
```php
php artisan livewire:layout
```

## create a compononent to demonstrate how livewire works

###### the created component act as a controller for the view page. the logic of the page would be done in this file

```php
php artisan livewire:make TestPage
```
##### Make Component for displaying listt of cars

```php
php artisan livewire:make CarList
```
