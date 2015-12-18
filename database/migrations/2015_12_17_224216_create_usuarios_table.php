<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rut',12);
			$table->string('nombre');
			$table->string('apellidoP',64);
			$table->string('apellidoM',64);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->boolean('estadoRegistro');
			$table->enum('type',['member','admin'])->default('member');
			$table->rememberToken();
			$table->string('url_avatar', 47);
			$table->softDeletes();
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
		Schema::drop('usuarios');
	}

}
