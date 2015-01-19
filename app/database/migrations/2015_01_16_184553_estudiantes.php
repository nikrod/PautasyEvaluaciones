<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiantes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes',function($table) {


			$table->increments('id');
			$table->integer('usuario_id');
			$table->foreign('usuario_id')->references('id')->on('usuarios');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}

}
