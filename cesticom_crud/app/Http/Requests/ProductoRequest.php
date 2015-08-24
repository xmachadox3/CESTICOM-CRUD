<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre_producto' 	=> 'required|min:3|max:100',
            'descripcion' 		=> 'required|min:10|max:255',                       
            'precio' 			=> 'regex:/[\d]{1,4},[\d]{2}/', //regex para manejo de decimales, investigar más
            //'precio' => 'required|regex:"/^[0-9]{1,5}(\.?)[0-9]{1,2}$/"',
            'cantidad' 			=> 'integer',
		];
	}
}