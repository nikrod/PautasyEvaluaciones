<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ficheros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficheros',function($table){

			$table->integer('id');
			$table->integer('categoria_id');
			$table->integer('asignatura_id');
			$table->string('ruta');
			$table->integer('usuario_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ficheros');
	}

}
