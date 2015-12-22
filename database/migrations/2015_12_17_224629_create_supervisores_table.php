<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supervisores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('asignatura');
			$table->timestamps();

			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('rut')->on('usuarios')->onDelete('cascade');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supervisores');
	}

}
