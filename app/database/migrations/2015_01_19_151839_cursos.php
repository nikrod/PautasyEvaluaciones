<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos',function($table){

			$table->integer('id');
			$table->integer('docente_id');
			$table->integer('seccion');
			$table->integer('anio');
			$table->integer('ordinal');
			$table->integer('asignatura_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursos');
	}

}
