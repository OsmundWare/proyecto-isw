<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration {
//

	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->increments('id_grupo')->unique();
			$table->string('nombre_grupo');
			$table->timestamps();

			$table->integer('id_participante')->unsigned();
			$table->foreign('id_participante')->references('id_participante')->on('participantes')->onDelete('cascade');

		});
	}

	public function down()
	{
		Schema::drop('grupos');
	}

}
