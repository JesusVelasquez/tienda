<?php 

require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config/database.php';
require 'models/Productos.php';
require 'models/Almacenes.php';
require 'models/Trabajadores.php';


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//$app = new  \Slim\App();
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
// Get container
$container = $app->getContainer();


// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => 'templates/.cache',
    	'auto_reload' => true
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};


$app->get('/', function(){
	return "Esta bien";
});


include 'middleware/escribirRuta.php';

include 'controllers/productos.php';
include 'controllers/inicio.php';


$app->run();

 ?>