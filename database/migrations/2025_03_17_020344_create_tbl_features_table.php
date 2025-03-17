<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_features', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Feature name
            $table->text('description')->nullable(); // Feature description
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_features');
    }
}