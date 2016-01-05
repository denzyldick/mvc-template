<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'demo',
    'password' => 'demo',
    'database' => 'phpmvc',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();