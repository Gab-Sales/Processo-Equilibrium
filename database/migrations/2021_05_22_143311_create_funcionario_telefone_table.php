<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_telefone', function (Blueprint $table) {
            $table->id( column: 'Codigo');
            $table->unsignedBigInteger( column: 'Funcionario');
            $table->bigInteger( column: 'Telefone')->nullable();
            $table->timestamps();

            $table->foreign('Funcionario')->references('Codigo')->on('funcionarios')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_telefone');
    }
}
