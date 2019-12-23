<?php
require 'vendor/autoload.php';
require 'config/database.php';
require 'start.php';

/*
Capsule::schema()->create('orders', function($table) {
	$table->increments('id');
	$table->string('title');
	$table->timestamp('created_at');
	$table->timestamp('updated_at');
});

*/


//Order::create(['title'=>'Testing']);
var_dump(Client::first()->toArray());