# laravel-mikuia-api
RESTful Mikuia API for Laravel 5  
__Warning: This library is an non-tested and alpha library. Use it at your risk.__

## Installation
```
composer require becold/laravel-mikuia-api:dev-master
```

In `config/app.php`, add this provider :
```php
Becold\MikuiaApi\Providers\MikuiaApiServiceProvider::class
```

In the same file, add this facade in `aliases` :
```php
'MikuiaApi' => Becold\MikuiaApi\Facades\MikuiaApiServiceFacade::class,
```
