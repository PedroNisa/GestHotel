<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTrabajador extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trabajador', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 100);
			$table->string('apellido1', 100);
			$table->string('apellido2', 100);
			$table->string('telefono', 100);
			$table->string('direccion', 100);
			$table->string('email', 100);
			$table->string('dni', 100);
			$table->string('activo', 1);
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
		Schema::dropIfExists('trabajador');

	}

}
