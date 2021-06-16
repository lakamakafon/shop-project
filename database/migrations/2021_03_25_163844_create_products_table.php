<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("manufacturer");
            $table->string("model")->unique();
            $table->string("code")->unique();
            $table->float("price", 6,2)->unsigned();
            $table->text("description");
            $table->string("short_description");
            $table->string("gallery");
            $table->string('CPU_family');
            $table->string('CPU_model');
            $table->string('CPU_Hz');
            $table->string('cores_threads');
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
        Schema::dropIfExists('products');
    }
}
