<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baju', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjual_id')->constrained('penjual');
            $table->foreignId('pembuat_id')->constrained('pembuat');
            $table->integer('harga_baju')->default(0);
            $table->string('merek_baju', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baju');
    }
};
