<?php
$settings = array(
	'driver' => 'pgsql',
	'host' => 'localhost',
	'port' => 5432,
	'database' => 'postgres',
	'username' => 'postgres',
	'password' => 'postgres',
	'charset' => 'UTF8',
	'collation' => 'utf8_general_ci',
	'prefix' => '',
	'schema' => 'public'
);

$container = new Illuminate\Container\Container;
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);