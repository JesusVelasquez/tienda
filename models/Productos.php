<?php

class Productos extends Illuminate\Database\Eloquent\Model{
	protected $table = "producto";
	public $timestamps = false;
	public $primaryKey = "id_producto"; 
}