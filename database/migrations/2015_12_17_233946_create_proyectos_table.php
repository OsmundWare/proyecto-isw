<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('tipoProyecto');
			$table->string('descripcion');
			$table->string('estadoRegistroProyecto');
			$table->timestamps();


			$table->integer('supervisor_id')->unsigned();
			$table->foreign('supervisor_id')->references('id')->on('supervisores')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyectos');
	}

}
