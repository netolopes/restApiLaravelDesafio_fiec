<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('endereco', function(Blueprint $table)
		{
			$table->foreign('cliente', 'cliente_id_fk')->references('id')->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo', 'endereco_ibfk_1')->references('idTipo')->on('tipoendereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('endereco', function(Blueprint $table)
		{
			$table->dropForeign('cliente_id_fk');
			$table->dropForeign('endereco_ibfk_1');
		});
	}

}
