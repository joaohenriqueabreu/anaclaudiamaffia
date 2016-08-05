<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnEnderecoFromProjetos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('projetos', function ($table) {
            $table->dropColumn('nome_cliente');
            $table->dropColumn('endereco');
            $table->dropColumn('data_inicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('projetos', function ($table) {
            $table->string('nome_cliente')->nullable();
            $table->string('endereco')->nullable();
            $table->dateTime('data_inicio')->nullable();
        });
    }


}
