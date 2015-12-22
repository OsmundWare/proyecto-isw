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

			$table->integer('rut',12)->unique();
			$table->string('nombre');
			$table->string('apellidoP',64);
			$table->string('apellidoM',64);
			$table->string('email')->unique();
			$table->string('password', 120);
			$table->boolean('estadoRegistro')->default(false);
			$table->enum('type',['member','admin'])->default('member');
			$table->rememberToken();
			//$table->string('url_avatar', 47);
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
