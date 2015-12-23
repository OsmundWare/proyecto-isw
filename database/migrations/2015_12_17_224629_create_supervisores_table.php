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
			$table->increments('id_supervisor')->unique();
			$table->timestamps();
			$table->string('rut_usuario')->unsigned();
			$table->foreign('rut_usuario')->references('rut_usuario')->on('usuarios')->onDelete('cascade');

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
