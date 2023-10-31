<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Odenensiparisler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odenensiparisler', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("urunadi");
            $table->string("urunresim");
            $table->string("urunfiyat");
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
        Schema::dropIfExists('odenensiparisler');
    }
}
