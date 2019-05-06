<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->string('cep', 15);
			$table->string('logradouro', 150);
			$table->string('complemento', 150);
			$table->string('localidade', 150);
			$table->string('uf', 2);
			$table->integer('tipo')->index('tipo');
			$table->integer('cliente')->index('cliente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco');
	}

}
