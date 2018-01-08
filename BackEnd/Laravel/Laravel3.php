<?php 
//Manejo De Querys
App\Post::all()
App\Post::first() 
App\Post::find($model) 
App\Post::where('name','a')->last()
App\Post::where('name','a')->first()
App\Post::where('name','a')->toJson()
$objeto = Client::where('codigo', 'LIKE',$space.'%')->paginate(); {{!! $objeto->render()!!}}

$objeto = Client::where('id', $model)->update([
		"name" => $request->input('name')
	])

  	Product::create($request->all());             
        flash('Producto Insertado Con Exito!!')->success()->important();
        return redirect()->route('productos.index');

$objeto = Product::find($request->valor);       
$charge = $objeto->cantidad+$request->amount;
$objeto->cantidad = $charge;
$objeto->save();
return redirect()->route('home');




//Estructura de optimizacion
use Illuminate\Routing\Route;
public function __construct(){
	$this->beforeFilter('@metodoAllmar',['only'=>['update','edit','']])
}
public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario')); //Directamente colocando el $this->user en nuestras rutas
    }


 ?>