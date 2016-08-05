<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjetos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projetos', function(Blueprint $table) {
			$table->engine = "InnoDB";
			$table->increments('id');
            $table->string('nome');
            $table->text('descricao');
			$table->string('cidade')->nullable();
			$table->string('endereco')->nullable();
			$table->string('nome_cliente')->nullable();
			$table->datetime('data_inicio')->nullable();
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
		Schema::drop('projetos');
	}

}
