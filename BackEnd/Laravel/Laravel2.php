<?php 
//Manejo Del Controlador

$user = User::find($id);
	$user->fill($request->all());
    $user->save();
    Session::flash('message','Usuario Actualizado Correctamente');
    return Redirect::to('/usuario'); 



//Estructura De Control Save
    bcrypt($request->input('name'))
	Client::create($request->all());
	if(Auth::check()): //Obteniendo los datos de la autenticacion      
	Client::create([
		'name' 		=> $request->input('name'),
		'user_id' 	=> Auth::user()->id /*Obteniendo el id del la seccion?*/
	]);
	$user = User::find($id)
	$user->fill($request->all())
	$user->save()
	return redirect()->route('ventas.show',$request->codigo);
	endif;

	User::destroy($id)


//Uso De Middlewares
	
	public function __construct()
	{
		$this->middleware('auth',['only' => 'methodName']);
	}










 ?>