<?php 

$app->get('/productos/', function($request, $response, $args){
	$productos=	\Productos::join('almacen','almacen.id_producto','=','producto.id_producto')
				->orderBy('producto.id_producto')
				->get();

	//return $productos->toJson();
	$this->view->render($response, 'productos/productos.twig', ["productos"=>$productos, "nombre" => "Jesus"]);
});


$app->get('/productos/{id}/almacenes/{id2}/', function($request, $response, $args) use ($app){
	//$producto = Productos::find($args['id']);
	//*
	//return 'hola';
	$producto=	\Productos::where('producto.id_producto',$args['id'])
				->where('almacen.id_tienda',$args['id2'])
				->join('almacen','almacen.id_producto','=','producto.id_producto')
				->get();
	//*/			
	//return $producto->toJson();
	$this->view->render($response, 'productos/update.twig', ["producto"=>$producto[0]]);
});


$app->get('/crearProductos/', function($request, $response, $args) use ($app){

	$this->view->render($response, 'productos/create.twig');

});


$app->put('/productos/{id}/almacen/{id2}/', function($request, $response, $args) {
	
	
	$producto = Productos::find($args['id']);
	$producto->descripcion = $request->getParsedBody()['descripcion'];
	$producto->observacion = $request->getParsedBody()['observacion'];
	$producto->id_tipo = $request->getParsedBody()['id_tipo'];

    //$id_tienda= $args['id2'];
        //return $id_tienda;

	
	//$response->write($cantidad);
    $almacen= \Almacenes::where('id_producto',$args['id'])
    			->where('id_tienda',$args['id2'])
    			->update([
    				'precio_venta' => $request->getParsedBody()['precio_venta'],
    				'cantidad' => $request->getParsedBody()['cantidad'],
    				'fecha_inicial' => $request->getParsedBody()['fecha_inicial'],
    				'fecha_final' => $request->getParsedBody()['fecha_final']
    				]);

//	$response->write($almacen);
   /* $almacen= \Almacenes::where('id_producto',$args['id'])
    			->where('id_tienda',$id_tienda)
    			->get();*/
   // return $almacen->toJson();

//	$almacen[0]->cantidad = $request->getParsedBody()['cantidad'];

    //return $almacen->toJson();

	$producto->update();
	//$almacen->update();
	return $producto;
	//return $almacen;
});

$app->post('/productos/', function($request, $response, $args) use ($app) {
	
	
	$descripcion = $request->getParsedBody()['descripcion'];
	$fecha_actual=date("Y/m/d");
	
	$productos = \Productos::insert([
                'descripcion' => $request->getParsedBody()['descripcion'],
                'observacion' => $request->getParsedBody()['observacion'],
                'id_tipo'=>$request->getParsedBody()['id_tipo']
                ]);

	$ultimo_prod = \Productos::where('descripcion', $descripcion)
					->orderBy('id_producto','desc')
					->first();

	$almacenes = \Almacenes::insert([
				'id_producto' => $ultimo_prod->id_producto,
				'id_tienda' => $request->getParsedBody()['id_tipo'],
				'cantidad' => $request->getParsedBody()['cantidad'],
				'precio_venta'=> $request->getParsedBody()['precio_venta'],
				'fecha_inicial'=> $request->getParsedBody()['fecha_inicial'],
				'fecha_final'=> $request->getParsedBody()['fecha_final'],
				'fecha_alta' => $fecha_actual
				]);	

    
	$this->view->render($response, 'productos/create.twig');	
	
});




$app->get("/registrar/", function(){
	
	
$_SESSION["user"] = ["rol"=>"trabajador"];
//$response->write($_SESSION);
print_r($_SESSION);
return $_SESSION;
});

$app->get("/borrar/", function(){
session_destroy();
return $_SESSION;
});

 ?>