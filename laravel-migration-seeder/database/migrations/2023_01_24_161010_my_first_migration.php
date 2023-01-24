<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('travel', function (Blueprint $table){
            $table->bigIncrements("id");
            $table->string("Azienda");
            $table->string("Stazione di partenza");
            $table->string("Stazione di arrivo");
            $table->timestamp("Orario di partenza");
            $table->timestamp("Orario di arrivo");
            $table->string("Codice Treno");
            $table->string("Numero Carrozze");
            $table->string("In orario");
            $table->string("Cancellato");
        });
    }

    public function down()
    {
        Schema::drop("travel");
    }
};
