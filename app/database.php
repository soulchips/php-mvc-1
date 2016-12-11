<?php

/*
*Creates and manages a MySql DB connection using Eloquent
*Params may be edited as needed
*Does require that the database exist prior to usage
*To use DB connection in your models, just extend you model class with Eloquent as demoed in models/User.php
*/

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver'=>'mysql',
	'host'=>'127.0.0.1',
	'username'=>'root',
	'password'=>'password',
	'database'=>'your_db',
	'charset'=>'utf8',
	'collation'=>'utf8_unicode_ci',
	'prefix'=>''
]);

$capsule->bootEloquent();