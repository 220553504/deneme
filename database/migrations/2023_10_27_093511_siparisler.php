<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siparisler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparisler', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("urunadi")->nullable();
            $table->string("urunresim")->nullable();
            $table->string("urunfiyat")->nullable();
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
        Schema::dropIfExists('siparisler');
    }
}
