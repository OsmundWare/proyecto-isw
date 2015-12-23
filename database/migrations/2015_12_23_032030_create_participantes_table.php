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
			$table->increments('id_participante')->unique();
			$table->timestamps();
			$table->string('rut_usuario')->unsigned();
			$table->foreign('rut_usuario')->references('rut_usuario')->on('usuarios')->onDelete('cascade');


			$table->integer('id_grupo')->unsigned();
			$table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
		});
	}


	public function down()
	{
		Schema::drop('participantes');
	}

}
