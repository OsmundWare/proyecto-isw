<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros', function(Blueprint $table)
		{
			$table->increments('id_registro')->unique();
			$table->boolean('estado_registrio');
			$table->timestamps();

			$table->integer('id_supervisor')->unsigned();
			$table->integer('id_participante')->unsigned();
			$table->integer('id_grupo')->undigned();

			$table->foreign('id_supervisor')->references('id_supervisor')->on('supervisores')->onDelete('cascade');
			$table->foreign('id_participante')->references('id_participante')->on('participantes')->onDelete('cascade');
			$table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registros');
	}

}
