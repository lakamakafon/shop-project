<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop-details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('CPU_family');
            $table->string('CPU_model');
            $table->string('CPU_Hz');
            $table->string('RAM_type');
            $table->string('RAM_size');
            $table->string('GPU');
            $table->string('GPU_model');
            $table->string('disk_type');
            $table->string('disk_size');
            $table->string('screen_type');
            $table->string('screen_size');
            $table->string('ports');
            $table->string('battery');
            $table->string('OS');
            $table->string('OS_lang');
            $table->string('size');
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
        //
    }
}
