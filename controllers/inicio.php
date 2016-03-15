<?php 

$app->get('/inicio/', function($request, $response, $args) use ($app){
	//return 'hola';
	$this->view->render($response, 'inicio/inicio.twig');
	});

$app->get('/sesion/', function($request, $response, $args) use ($app){
	$usuario=$_GET['id_trabajador'];
	$contraseña=$_GET['contraseña'];

	$trabajador=\Trabajadores::find($usuario);
	if($trabajador->contraseña==$contraseña){

		$this->view->render($response, 'productos/productos.twig');	
	}
	else{
		$this->view->render($response, 'inicio/inicio.twig');		
	}

	return $trabajador;
});

?>