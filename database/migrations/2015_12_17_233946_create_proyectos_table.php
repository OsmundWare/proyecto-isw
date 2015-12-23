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
			$table->increments('id_proyecto')->unique();
			$table->string('titulo',140);
			$table->string('tipo_proyecto',255);
			$table->string('descripcion',255);
			$table->string('estado_registro_proyecto')->nullable()->default('pendiente');
			$table->timestamps();
			$table->integer('id_supervisor')->unsigned();
			$table->foreign('id_supervisor')->references('id_supervisor')->on('supervisores')->onDelete('cascade');
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
