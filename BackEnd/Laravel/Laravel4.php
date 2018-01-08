<?php 
//Manejo De Modelos
  Schema::create('sales', function (Blueprint $table) {
			$table->increments('id');
			$table->string('modoPago');
			$table->double('subtotal');
			$table->double('total');
			$table->string('iva');
			$table->integer('idclient')->unsigned();
			$table->foreign('idclient')->references('id')->on('clients')->onDelete('cascade');
			$table->timestamps();
		});

		 Schema::create('sales_products', function (Blueprint $table) {
			$table->increments('id');
			$table->string('idsales')->unsigned();
			$table->double('idproducts')->unsigned();
			$table->integer('cantidad');
			$table->foreign('idsales')->references('id')->on('sales')->onDelete('cascade');
			$table->foreign('idproducts')->references('id')->on('products')->onDelete('cascade');
			$table->timestamps();
		});

//Logica De Condicion por tablas repetidas
		if(!Schema::hasTable('tableName')){
		  Schema::create('sales_products', function (Blueprint $table) {});
		 }


//Soft Deleting

protected $dates = ['deleted_at'];
//// php artisan make:migration create_posts_table  --table="post" Usando $User->delete($id)
// User::onlyTrashed() Mostrando solamente los eliminados
Schema::table('posts', function(Blueprint $table) { 
		$table->softDeletes();
	});

Schema::table('posts', function(Blueprint $table) {
		$table->dropSoftDeletes();
	});




public function client()
  	{
        return $this->belongsTo('App\Client');
    }

public function products()
    {
        return $this->belongsToMany('App\Product');
    }


    //Encriptando passwords en mi controlador
    public function setPasswordAttribute($valor){
    	if(!empty($valor)){
    		$this->attributes['password'] = \Hash::make($valor);
    	}
    }

 ?>