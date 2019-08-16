<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user','fk_usuarioMovimiento')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict'); 
            $table->unsignedBigInteger('id_tipo_movimiento');
            $table->foreign('id_tipo_movimiento','fk_tipoMovimiento')->references('id')->on('tipo_movimiento')->onDelete('restrict')->onUpdate('restrict');
            $table->string('descripcion',200);
            $table->integer('value');     
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
        Schema::dropIfExists('movimientos');
    }
}
