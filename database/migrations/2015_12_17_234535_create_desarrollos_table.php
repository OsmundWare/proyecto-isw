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
			$table->integer('id_grupo')->unsigned();
			$table->integer('id_proyecto')->unsigned();
			$table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
			$table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos')->onDelete('cascade');

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