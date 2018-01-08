<?php 
// Manejo De Composer
// $ composer init
// $ composer install
// $ php composer create-project laravel/laravel mi-proyecto
// $ php composer remove vendor/package //Eliminando cierta dependencia




//Manejo De Artisan

// php artisan tinker
// php artisan migrate
// php artisan make:auth
// php artisan view:clear
// php artisan route:list
// php artisan help comando
// php artisan key:generate#
// php artisan package:discover#
// php artisan make:model Post -m
// php artisan make: middleware Name RECUERDA IR A KERNEL DENTRO DE HTTP Y EN ROUTEMIDDLEWARE INGRESAR EL CREADO
// php artisan make:request UserRequest
// php artisan make:middleware HasUserASession
// php artisan make:controller PostController --resource
// php artisan make:migration create_posts_table  --table="nameoftable"
// php artisan make:controller PostController --resource --model=mdoelName
// php artisan make:migration add_fields_to_users_table --table="users" Agregando varios campos a la tabla




//Manejo De Ruta

Route::resource('photos', 'PhotoController');
Route::get('dashboard', function () {
    return redirect('home/dashboard');
});
Route::name('nameruta')->get('/post','controlname@holis')
Route::get('saludo/{name}','HolaControler@hola')->where('name','[0-9]+')


Route::get('saludo/{name}',function($name){
	return "Hola {$name}";
})
 
Route::name('products.edit')
    ->get('products/{product}/edit', 'ProductController@edit')
    ->middleware('guest');

#Siguiendo siempre un orden colocando resources de ultimo lugar    
Route::get('/home/ventas{id}', ['uses' => 'ventaController@create2','as' => 'ventas.create2']);
Route::get('/home/productos{id}/destroy',['uses' => 'productController@destroy','as' => 'productos.destroy']);


Route::Middleware(['auth'])->group(function(){
	Route::resource('','ClaseController')
})


//Paso De Variables
return view('hola',['nombre'=>'valor']);
return view('hola')->with('name','value')->with("","")
return redirect()->route("",["",$])->with("","")
{{ route('nameofruta',['post' => $post->id]) }}
{{URL('users/'.$valor->id./"edit")}}





//Manejo Basico De Blade
@if(is_null($nombre)) 
@else 

@endif
@foreach($elemtes as $element) 
@endforeach

@yield('content')
@section('content') 
@endsection
@extends('layout.apps')
@include('usuario.forms') 
	//Seccion De Listado 
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operacion</th>
			</thead>
			@foreach($users as $user)
				<tbody>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
	@endsection








	//Mensajes De Errores
	@if($message == 'store')
	<div class="alert alert-success alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
	</div>
	@endif
	
	@if(count($errors) > 0)
		<div class="alert alert-danger alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  		<ul>
	  			@foreach($errors->all() as $error)
	  				<li>{!!$error!!}</li>
	  			@endforeach
	  		</ul>
	  	</div>
	@endif





//Manejo De Formularios
<form action="{{URL('users/'.$valor->id./"edit")}}" method = 'POST'>
<form action="{{route('company.update',[$company->id])}}" method = 'POST'>
{{csrf_field()}}

{{method_field('DELETE')}}
<input type="hidden" name="_method" value="DELETE">





	//Estructura de eliminacion
<a href="#" onclick="let result = confirm("") if(result){ event.preventDefault() document.getElementById(form07).submit() }">

<form id="form07" action="{{route('company.update',[$company->id])}}" method = 'POST' style="display:none">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}

@extends('layouts.admin')
	@section('content')

		{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}	
	@endsection





//feature simula peticiones unit no solo clases y metodos
	//recuerda que es muy importante el orden de las rutas
	alias t= vendor/bin/phpunit
	php artisan make:test nameOfTest
	ucfirst()//primera letra en mayuscula
	__invoke(){}//llamando un objeto como si fuera una funcion
	e()//en la vista limpia el archivo de codigo js
	compact('varia1','varia2')// siendo varia1 un array o variable esta fucion retorna un array asociativo
	if($request->has('empty'))
	unless() = if(!)
	@empty
	@else
	//manejo de middlewares
	@endempty
?>