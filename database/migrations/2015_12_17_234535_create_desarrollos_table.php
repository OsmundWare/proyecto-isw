<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrollosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desarrollos', function(Blueprint $table)
		{
			$table->timestamps();

			$table->integer('grupo_id')->unsigned();
			$table->integer('proyecto_id')->unsigned();
			$table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
			$table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('desarrollos');
	}

}
