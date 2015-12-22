<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('numeroIntegrantes');
			$table->timestamps();



			$table->integer('participante_id')->unsigned();
			//$table->integer('estadoRegistroP_id')->unsigned();

			$table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
			//$table->foreign('estadoRegistroP_id')->references('id')->on('participantes')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupos');
	}

}
