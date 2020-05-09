<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringsTable extends Migration
{

    public function up()
    {
        Schema::create('caterings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->String('CateringID');
            $table ->String('ItemName');
            $table->String('ItemDetails');
            $table->Integer('ItemQuantity');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('caterings');
    }
}
