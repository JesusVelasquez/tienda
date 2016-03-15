<?php 

$app->add(function($request, $response,$next) use ($app){
	$path = $request->getUri()->getPath();

	session_start();
	if(isset($_SESSION["user"]))
		$usuario = $_SESSION["user"];
		//$path = $_SESSION;		
	if($path === "/productos/"){
		if(isset($usuario)){
			$response->write("si puedes pasar");
			$next($request, $response);
			$response->getBody()->write($path);
			//$response->write($_SESSION);
		}else{
			$response->withStatus(400);
			$response->write("No puedes pasar");
		}
	}else{
		$next($request, $response);
		$response->getBody()->write($path);
	}
	return $response;
});

 ?>