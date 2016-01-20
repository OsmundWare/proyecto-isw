<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSproyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sproyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_grupo');
			$table->string('titulo_sp');
			$table->string('tipo_sp');
			$table->string('descripcion_sp');
			$table->String('aprobacion_sp')->default('Pendiente');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sproyectos');
	}

}
