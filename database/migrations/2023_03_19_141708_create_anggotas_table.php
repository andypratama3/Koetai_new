<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('devisi');
            $table->string('poto');
            $table->string('ig');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
