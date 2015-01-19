<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('usuarios',function ($table){


			$table->increments('id');
			$table->integer('rut')->unique();
			$table->string('nombres');
			$table->string('apellidos');
			$table->integer('telefono');
			$table->string('email');




		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
