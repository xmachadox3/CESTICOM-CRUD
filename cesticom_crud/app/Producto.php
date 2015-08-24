<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	//Nivel de abstraccion de la bd, esto permite que en el modelo, solo se concuerde con estos datos.
	protected $fillable = [
		'nombre_producto',
        'descripcion',                       
        'precio', 
        'cantidad',
	];

}
