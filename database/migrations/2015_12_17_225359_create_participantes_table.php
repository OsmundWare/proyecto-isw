<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('estadoRegistroP');
			$table->string('curso');
			$table->string('seccion');
			$table->timestamps();
			//$table->primary(['id', 'estadoRegistroP']);


			$table->integer('rol_id')->unsigned();
			$table->integer('usuario_id')->unsigned();


			$table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
			$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes');
	}

}
