<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		schema::create('roles', function(Blueprint $table)
	{
		$table->integer('id_rol')->unique();
		$table->string('nombre_rol',50);
		$table->integer('prioridad');
		$table->timestamps();

		$table->integer('id_participante')->unsigned();
		$table->foreign('id_participante')->references('id_participante')->on('participantes')->onDelete('cascade');

	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
	}

}



