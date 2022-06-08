<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosCesta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPro');
            $table->foreign('idPro')->references('id')->on('producto');
            $table->integer('cantidad');
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')->references('id')->on('pedido');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productosCesta');
    }
};
