<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'=> 'mysql',
	'database' => 'rjmilano_rjmchicago',
	'host'=>'127.0.0.1',
	'username'=>'root',
	'password'=>'kether1330',
	'charset'=>'utf8',
	'collation'=>'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();