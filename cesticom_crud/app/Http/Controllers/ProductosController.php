<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//PSR-4 Modelo Producto
use App\Producto;

class ProductosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ProductosController Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "Productos" for the application and
	| is configured to only allow "guests". Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/*
		Por los momentos se usa el midleware establecido para guest,
		Se pretende a futuro utilizar un sistema de midleware para 
		las acciones correspondientes. Manejando una permisología.
	*/
	public function __construct()
	{
		$this->middleware('guest'); 
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tables = Producto::paginate(7);
        return view('productos.index', compact('tables'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\ProductoRequest $request)
	{
		Producto::create($request->all());
		\Session::flash('flash_message','producto guardado!!!');
		return redirect('');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$table  = Producto::findOrFail($id);
		return view('productos.edit',compact('table'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\ProductoRequest $request)
	{
		$table = Producto::findOrFail($id);
        $table->update($request->all());
    	\Session::flash('flash_message','Se ha actualizado crrectamente!!!');
        return redirect('');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Producto::find($id)->delete();
		\Session::flash('flash_message','Se ha eliminado correctamente!!!');
        return redirect('');
	}

	public function search(Request $request)
	{
		$nombre = $request->input('nombre_producto');
        return View('productos.search')->with('tables', Producto::where('nombre_producto', 'like', '%' . $nombre . '%')->paginate(7));
	}


}
