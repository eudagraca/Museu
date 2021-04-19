<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('potencia_instalada_servico')->nullable();
            $table->string('potencia_disponivel')->nullable();
            $table->string('ano')->nullable();
            $table->string('nivel')->nullable();
            $table->string('zona')->nullable();
            $table->string('transformadores')->nullable();
            $table->string('ponta_data')->nullable();
            $table->string('estado_ actual')->nullable();
            $table->string('nota')->nullable();
            $table->text('barramento')->nullable();
            $table->string('configuracao')->nullable();
            $table->string('capacidade_linhas')->nullable();
            $table->string('circuito')->nullable();
            $table->string('comprimento')->nullable();
            $table->string('tipo_torres')->nullable();
            $table->string('tipo')->nullable();
            $table->string('tipo_condutor')->nullable();
            $table->string('tipo_isoladores')->nullable();
            $table->string('cabo_guarda')->nullable();
            $table->string('estado_actual')->nullable();
            $table->string('engenheiro')->nullable();
            $table->text('imagem')->nullable();
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
        Schema::dropIfExists('patrimonios');
    }
}
