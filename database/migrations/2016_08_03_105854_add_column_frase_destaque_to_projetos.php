<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFraseDestaqueToProjetos extends Migration
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
            $table->renameColumn('descricao','resumo');
            $table->string('descricao_completa')->nullable();
            $table->string('frase_destaque')->nullable();
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
            $table->renameColumn('resumo','descricao');
            $table->dropColumn('descricao_completa');
            $table->dropColumn('frase_destaque');
        });
    }
}
