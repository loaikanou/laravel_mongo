Laravel MongoDB
===============

# Laravel Package for MongoDB

An Eloquent model and Query builder with support for MongoDB, using the original Laravel API. This library extends the original Laravel classes, so it uses exactly the same methods.

## Quick Start Guide

- Create a Laravel 5.5 project: `composer create-project laravel/laravel mongo-project`
- `cd mongo-project`
- Add dependency: `composer require loaikanou/laravel_mongo`
- Copy configuration: `php artisan vendor:publish`
- Run your project: `php artisan serve`

Now you are ready to use the Mongo Facade, e.g. open routes/web.php:

``` PHP
<?php

Route::get('mongo', function(Request $request) {
    $collection = Mongo::get()->mydatabase->mycollection;
    return $collection->find()->toArray();
});

Route::get('/', function () {
    return view('welcome');
});

```

Add a document to mycollection in mydatabase and open the browser at http://127.0.0.1:8000

To override the default MongoDB connection configuration add the following parameters to your .env file. Find a detailed description on the [MongoDB Driver Manager Page](http://php.net/manual/en/mongodb-driver-manager.construct.php). Use JSON notation within single quotes `'` for options.

```
MONGO_URI=mongodb://127.0.0.1:27017
MONGO_URI_OPTIONS='{"appname": "app", "replicaSet": "repl"}'
MONGO_DRIVER_OPTIONS=
```

........