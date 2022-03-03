<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('generic_name');
            $table->string('formulas');
            $table->string('restriction_formula')->nullable();
            $table->double('price',12,2);
            $table->string('description')->nullable();
            $table->boolean('faskes_TK1')->default(0);
            $table->boolean('faskes_TK2')->default(0);
            $table->boolean('faskes_TK3')->default(0);
            $table->string('image');
            
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
        Schema::dropIfExists('medicines');
    }
}
